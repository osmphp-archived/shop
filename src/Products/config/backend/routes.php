<?php

use Osm\Framework\Http\Returns;
use Osm\Shop\Products\Controllers\Backend;

return [

    'GET /products/' => [
        'class' => Backend::class,
        'method' => 'productsPage',
    ],

    'GET /products/edit' => [
        'class' => Backend::class,
        'method' => 'editPage',
    ],
];