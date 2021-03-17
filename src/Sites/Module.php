<?php

declare(strict_types=1);

namespace Osm\Shop\Sites;

use Osm\App\App;
use Osm\Core\BaseModule;

class Module extends BaseModule
{
    public static ?string $app_class_name = App::class;

    public static array $requires = [
        \Osm\Shop\Base\Module::class,
    ];
}