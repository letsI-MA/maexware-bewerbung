<?php

namespace YourVendor\MyCustomFieldModule\Controller;

use OxidEsales\Eshop\Application\Controller\ArticleController as BaseArticleController;
use OxidEsales\Eshop\Core\DatabaseProvider;

class ArticleController extends BaseArticleController
{
    public function render()
    {
        $this->addMyCustomField();
        return parent::render();
    }

    private function addMyCustomField()
    {
        $oArticle = $this->_getArticle();
        $sCustomField = $this->getMyCustomField($oArticle->getId());
        $this->_aViewData['myCustomField'] = $sCustomField;
    }

    private function getMyCustomField($articleId)
    {
        $oDb = DatabaseProvider::getDb();
        $sQuery = "SELECT OXMYCUSTOMFIELD FROM oxarticles WHERE oxid = ?";
        return $oDb->getOne($sQuery, [$articleId]);
    }
}
