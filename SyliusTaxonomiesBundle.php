<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\TaxonomiesBundle;

use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Flexible categorization system.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SyliusTaxonomiesBundle extends Bundle
{
    /**
     * Return array of currently supported drivers.
     *
     * @return array
     */
    public static function getSupportedDrivers()
    {
        return array(
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM
        );
    }
}
