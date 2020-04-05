<?php

use Osm\Framework\Http\Returns;
use Osm\Shop\App\Controllers\Backend;

return [

    'GET /' => [
        'class' => Backend::class,
        'method' => 'homePage',
    ],
];