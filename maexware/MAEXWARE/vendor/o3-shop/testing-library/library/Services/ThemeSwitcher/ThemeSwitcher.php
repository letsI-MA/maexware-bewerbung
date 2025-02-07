<?php
/**
 * This file is part of O3-Shop Testing library.
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

namespace OxidEsales\TestingLibrary\Services\ThemeSwitcher;

class ThemeSwitcher implements \OxidEsales\TestingLibrary\Services\Library\ShopServiceInterface
{

    protected $currentThemeName = '';

    /**
     * ThemeService constructor.
     *
     * @param \OxidEsales\TestingLibrary\Services\Library\ServiceConfig $config
     */
    public function __construct($config)
    {
    }

    /**
     * Initiates service.
     *
     * @param \OxidEsales\TestingLibrary\Services\Library\Request $request
     */
    public function init($request)
    {
        $themeName = $request->getParameter('themeName');
        $shopId = $request->getParameter('shp');

        $currentShopId = \OxidEsales\Eshop\Core\Registry::getConfig()->getShopId();
        \OxidEsales\Eshop\Core\Registry::getConfig()->setShopId($shopId);

        $theme = oxNew( \OxidEsales\Eshop\Core\Theme::class);
        $theme->load($themeName);
        $theme->activate();

        \OxidEsales\Eshop\Core\Registry::getConfig()->setShopId($currentShopId);
    }
}
