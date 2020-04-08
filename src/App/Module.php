<?php

namespace Osm\Shop\App;

use Osm\Core\Modules\BaseModule;
use Osm\Framework\Http\Advices\DetectArea;

class Module extends BaseModule
{
    public $hard_dependencies = [
        'Osm_Framework_Http',

        // load shop layers after all framework layers
        'Osm_Framework_Layers',

        // load shop layers after all UI layers
        'Osm_Ui_Aba',
        'Osm_Ui_Breadcrumbs',
    ];

    public $traits = [
        DetectArea::class => Traits\DetectAreaTrait::class,
    ];
}