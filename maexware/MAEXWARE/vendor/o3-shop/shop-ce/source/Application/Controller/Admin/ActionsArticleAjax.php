<?php

/**
 * This file is part of O3-Shop.
 *
 * O3-Shop is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, version 3.
 *
 * O3-Shop is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with O3-Shop.  If not, see <http://www.gnu.org/licenses/>
 *
 * @copyright  Copyright (c) 2022 OXID eSales AG (https://www.oxid-esales.com)
 * @copyright  Copyright (c) 2022 O3-Shop (https://www.o3-shop.com)
 * @license    https://www.gnu.org/licenses/gpl-3.0  GNU General Public License 3 (GPLv3)
 */

namespace OxidEsales\EshopCommunity\Application\Controller\Admin;

use oxRegistry;
use oxDb;
use oxField;

/**
 * Class controls article assignment to attributes
 */
class ActionsArticleAjax extends \OxidEsales\Eshop\Application\Controller\Admin\ListComponentAjax
{
    /**
     * If true extended column selection will be build
     *
     * @var bool
     */
    protected $_blAllowExtColumns = true;

    /**
     * Columns array
     *
     * @var array
     */
    protected $_aColumns = ['container1' => [ // field , table,         visible, multilanguage, ident
        ['oxartnum', 'oxarticles', 1, 0, 0],
        ['oxtitle', 'oxarticles', 1, 1, 0],
        ['oxean', 'oxarticles', 1, 0, 0],
        ['oxmpn', 'oxarticles', 0, 0, 0],
        ['oxprice', 'oxarticles', 0, 0, 0],
        ['oxstock', 'oxarticles', 0, 0, 0],
        ['oxid', 'oxarticles', 0, 0, 1]
    ]
    ];

    /**
     * Returns SQL query for data to fetc
     *
     * @return string
     * @deprecated underscore prefix violates PSR12, will be renamed to "getQuery" in next major
     */
    protected function _getQuery() // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $myConfig = $this->getConfig();
        $oDb = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();
        $sArticleTable = $this->_getViewName('oxarticles');
        $sViewName = $this->_getViewName('oxobject2category');

        $sSelId = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('oxid');
        $sSynchSelId = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('synchoxid');

        // category selected or not ?
        if (!$sSelId) {
            $sQAdd = " from $sArticleTable where 1 ";
            $sQAdd .= $myConfig->getConfigParam('blVariantsSelection') ? '' : " and $sArticleTable.oxparentid = '' ";
        } else {
            // selected category ?
            if ($sSynchSelId) {
                $blVariantsSelectionParameter = $myConfig->getConfigParam('blVariantsSelection');
                $sSqlIfTrue = " ({$sArticleTable}.oxid=oxobject2category.oxobjectid " .
                              "or {$sArticleTable}.oxparentid=oxobject2category.oxobjectid)";
                $sSqlIfFalse = " {$sArticleTable}.oxid=oxobject2category.oxobjectid ";
                $sVariantSelection = $blVariantsSelectionParameter ? $sSqlIfTrue : $sSqlIfFalse;
                $sQAdd = " from {$sViewName} as oxobject2category left join {$sArticleTable} on " . $sVariantSelection .
                         " where oxobject2category.oxcatnid = " . $oDb->quote($sSelId) . " ";
            }
        }
        // #1513C/#1826C - skip references, to not existing articles
        $sQAdd .= " and $sArticleTable.oxid IS NOT NULL ";

        // skipping self from list
        $sQAdd .= " and $sArticleTable.oxid != " . $oDb->quote($sSynchSelId) . " ";

        return $sQAdd;
    }

    /**
     * Adds filter SQL to current query
     *
     * @param string $sQ query to add filter condition
     *
     * @return string
     * @deprecated underscore prefix violates PSR12, will be renamed to "addFilter" in next major
     */
    protected function _addFilter($sQ) // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $sArtTable = $this->_getViewName('oxarticles');
        $sQ = parent::_addFilter($sQ);

        // display variants or not ?
        $sQ .= $this->getConfig()->getConfigParam('blVariantsSelection') ? ' group by ' . $sArtTable . '.oxid ' : '';

        return $sQ;
    }

    /**
     * Removing article assignment
     */
    public function removeActionArticle()
    {
        $sActionId = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('oxid');
        //$sActionId = $this->getConfig()->getConfigParam( 'oxid' );

        $oDb = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();

        $oDb->Execute(
            'delete from oxobject2action '
            . 'where oxactionid = :oxactionid'
            . ' and oxclass = "oxarticle"',
            [':oxactionid' => $sActionId]
        );
    }

    /**
     * Set article assignment
     */
    public function setActionArticle()
    {
        $sArticleId = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('oxarticleid');
        $sActionId = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('oxid');
        $oDb = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();

        $oDb->Execute(
            'delete from oxobject2action '
            . 'where oxactionid = :oxactionid'
            . ' and oxclass = "oxarticle"',
            [':oxactionid' => $sActionId]
        );

        $oObject2Promotion = oxNew(\OxidEsales\Eshop\Core\Model\BaseModel::class);
        $oObject2Promotion->init('oxobject2action');
        $oObject2Promotion->oxobject2action__oxactionid = new \OxidEsales\Eshop\Core\Field($sActionId);
        $oObject2Promotion->oxobject2action__oxobjectid = new \OxidEsales\Eshop\Core\Field($sArticleId);
        $oObject2Promotion->oxobject2action__oxclass = new \OxidEsales\Eshop\Core\Field("oxarticle");
        $oObject2Promotion->save();
    }
}
