<?php

use Osm\Framework\Views\Views\Container;
use Osm\Shop\Breadcrumbs\Views\Breadcrumbs;
use Osm\Ui\MenuBars\Views\Heading;
use Osm\Ui\Menus\Items\Type;

return [
    '@include' => ['page'],
    '#page' => [
        'modifier' => '-products',
        'content' => Container::new([
            'id' => 'content',
            'modifier' => 'page-section',
            'views' => [
                'breadcrumbs' => Breadcrumbs::new([
                    'items' => [
                        'content' => [
                            'title' => osm_t("Content"),
                        ],
                        'products' => [
                            'title' => osm_t("Products"),
                            'url' => osm_url('GET /products/'),
                        ],

                    ],
                ]),
                'heading' => Heading::new([
                    'items' => [
//                        'add' => [
//                            'type' => Type::LINK,
//                            'title' => osm_t("Add Product"),
//                            'url' => osm_url('GET /products/edit'),
//                            'modifier' => '-filled',
//                            'sort_order' => 10,
//                        ],
                    ],
                ]),
            ],
        ]),
    ],
];