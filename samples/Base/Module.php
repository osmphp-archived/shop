<?php

declare(strict_types=1);

namespace Osm\Shop\Samples\Base;

use Osm\Core\BaseModule;
use Osm\Shop\Samples\App;

class Module extends BaseModule
{
    public static ?string $app_class_name = App::class;

    public static array $requires = [
        \Osm\Shop\All\Module::class,
    ];
}