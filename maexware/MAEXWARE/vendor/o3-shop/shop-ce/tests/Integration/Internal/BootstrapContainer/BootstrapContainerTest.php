<?php
declare(strict_types=1);

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

namespace OxidEsales\EshopCommunity\Tests\Integration\Internal\BootstrapContainer;

use OxidEsales\EshopCommunity\Internal\Container\BootstrapContainerFactory;
use OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\ProductRatingBridgeInterface;
use OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContextInterface;
use OxidEsales\EshopCommunity\Internal\Transition\Utility\ContextInterface;
use OxidEsales\TestingLibrary\UnitTestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

/**
 * @internal
 */
final class BootstrapContainerTest extends UnitTestCase
{
    public function testContainerBuilding(): void
    {
        $container = BootstrapContainerFactory::getBootstrapContainer();
        $this->assertInstanceOf(ContainerInterface::class, $container);
    }

    public function testContainerProvidesBootstrapServices(): void
    {
        $container = BootstrapContainerFactory::getBootstrapContainer();

        $this->assertInstanceOf(
            BasicContextInterface::class,
            $container->get(BasicContextInterface::class)
        );
    }

    public function testContainerDoesNotProvideNotBootstrapServices(): void
    {
        $this->expectException(ServiceNotFoundException::class);

        $container = BootstrapContainerFactory::getBootstrapContainer();
        $container->get(ProductRatingBridgeInterface::class);
    }
}
