<?php

use Osm\Data\Sheets\Column;
use Osm\Shop\Products\Sheets\Products;

return [
    'products' => [
        'class' => Products::class,
        'columns' => [
            'type' => [
                'type' => Column::OPTION,
                'option_list' => 'product_types',
            ],
            'image' => [
                'type' => Column::FILE,
            ],
        ],
    ],
];