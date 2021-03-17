<?php

declare(strict_types=1);

namespace Osm\Shop\Users;

use Osm\App\App;
use Osm\Core\BaseModule;
use Osm\Framework\Data\Data;

class Module extends BaseModule
{
    public static ?string $app_class_name = App::class;

    public static array $requires = [
        \Osm\Shop\Base\Module::class,
    ];

    public static array $traits = [
        Data::class => Traits\DataTrait::class,
    ];
}