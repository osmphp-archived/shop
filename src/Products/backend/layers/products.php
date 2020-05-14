<?php

use Osm\Ui\Breadcrumbs\Views\Breadcrumbs;
use Osm\Ui\DataTables\Columns\Column;
use Osm\Ui\DataTables\Views\DataTable;
use Osm\Ui\Menus\Items\Type;
use Osm\Ui\Menus\Views\LinkItem;
use Osm\Ui\Pages\Views\Heading;

return [
    '@include' => ['page'],
    '#page.modifier' => '-products',
    '#content.items' => [
        'breadcrumbs' => Breadcrumbs::new([
            'items' => [
                'content' => [
                    'title' => osm_t("Content"),
                ],
                'products' => [
                    'title' => osm_t("Products"),
                ],

            ],
        ]),
        'heading' => Heading::new(['id' => 'heading']),
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
    '#heading.menu.items' => [
        'add' => LinkItem::new([
            'title' => osm_t("Add Product"),
            'url' => osm_url('GET /products/edit'),
            'main' => 'true',
            'sort_order' => 10,
        ]),
    ],
];