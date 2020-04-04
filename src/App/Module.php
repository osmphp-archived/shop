<?php

namespace Osm\Shop\App;

use Osm\Core\Modules\BaseModule;
use Osm\Framework\Http\Advices\DetectArea;

class Module extends BaseModule
{
    public $hard_dependencies = [
        'Osm_Framework_Http',
    ];

    public $traits = [
        DetectArea::class => Traits\DetectAreaTrait::class,
    ];
}