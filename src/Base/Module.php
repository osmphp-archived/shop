<?php

declare(strict_types=1);

namespace Osm\Shop\Base;

use Osm\App\App;
use Osm\Core\BaseModule;

class Module extends BaseModule
{
    public static ?string $app_class_name = App::class;

    public static array $requires = [
        \Osm\Framework\Data\Module::class,
        \Osm\Framework\ElasticSearch\Module::class,
        \Osm\Framework\Http\Module::class,
        \Osm\Framework\Migrations\Module::class,
        \Osm\Framework\Themes\Module::class,
    ];
}