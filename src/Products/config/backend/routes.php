<?php

use Osm\Framework\Http\Returns;
use Osm\Shop\Products\Controllers\Backend;
use Osm\Framework\Http\Parameters;

return [

    'GET /products/' => [
        'class' => Backend::class,
        'method' => 'productsPage',
    ],

    'GET /products/edit' => [
        'class' => Backend::class,
        'method' => 'editPage',
        'parameters' => [
            'id' => ['class' => Parameters\Int_::class],
        ],
    ],

    'POST /products/edit' => [
        'class' => Backend::class,
        'method' => 'edit',
        'returns' => Returns::JSON,
    ],
];