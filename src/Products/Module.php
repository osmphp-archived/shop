<?php

namespace Osm\Shop\Products;

use Osm\Core\Modules\BaseModule;
use Osm\Data\TableQueries\Relations;

class Module extends BaseModule
{
    public $hard_dependencies = [
        'Osm_Shop_App',
    ];

    public $traits = [
        Relations::class => Traits\RelationsTrait::class,
    ];
}