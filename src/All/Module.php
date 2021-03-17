<?php

declare(strict_types=1);

namespace Osm\Shop\All;

use Osm\Core\BaseModule;

class Module extends BaseModule
{
    public static array $requires = [
        \Osm\Shop\Settings\Module::class,
    ];

}