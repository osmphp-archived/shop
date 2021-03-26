<?php

declare(strict_types=1);

namespace Osm\Shop\Products;

use Osm\App\App;
use Osm\Core\Attributes\Name;
use Osm\Core\BaseModule;
use Osm\Framework\Data\Data;

#[Name('products')]
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