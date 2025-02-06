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

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'without_own_module_namespace',
    'title'        => 'Test module #10 - not namespaced',
    'description'  => 'Double the price. Show payment error message during checkout.',
    'thumbnail'    => 'module.png',
    'version'      => '1.0.0',
    'author'       => 'OXID eSales AG',
    'extend'      => array(
       // \OxidEsales\Eshop\Core\Price::class => 'without_own_module_namespace/Application/Model/TestModuleTenPrice'
       'oxprice' => 'without_own_module_namespace/Application/Model/TestModuleTenPrice'

    ),
    'files' => array('TestModuleTenModel'  => 'without_own_module_namespace/Application/Model/TestModuleTenModel.php',
                     'TestModuleTenPaymentController' => 'without_own_module_namespace/Application/Controller/TestModuleTenPaymentController.php',
                     'TestModuleTenPrice' => 'without_own_module_namespace/Application/Model/TestModuleTenPrice.php'
    ),
    'settings' => array(
    )
);
