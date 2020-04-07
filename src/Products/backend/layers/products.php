<?php

use Osm\Framework\Views\Views\Container;
use Osm\Shop\Breadcrumbs\Views\Breadcrumbs;
use Osm\Ui\DataTables\Columns\Column;
use Osm\Ui\DataTables\Views\DataTable;
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
                        'add' => [
                            'type' => Type::LINK,
                            'title' => osm_t("Add Product"),
                            'url' => osm_url('GET /products/edit'),
                            'modifier' => '-filled',
                            'sort_order' => 10,
                        ],
                    ],
                ]),
                'data_table' => DataTable::new([
                    'id' => 'data_table',
                    'sheet' => 'products',
                    'main_column' => 'title',
                    'not_found_message' => osm_t("There are no products yet."),
                    'edit_route' => 'GET /products/edit',
                    'load_route' => 'GET /products/rows',
                    'columns' => [
                        'id' => [
                            'title' => osm_t("ID"),
                            'type' => Column::STRING,
                            'width' => 50,
                        ],
                        'title' => [
                            'title' => osm_t("Title"),
                            'type' => Column::STRING,
                        ],
                        'price' => [
                            'title' => osm_t("Price"),
                            'type' => Column::STRING,
                        ],
                    ],
                ]),
            ],
        ]),
    ],
];