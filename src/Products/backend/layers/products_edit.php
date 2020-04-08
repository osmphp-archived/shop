<?php

use Osm\Framework\Views\Views\Container;
use Osm\Ui\Breadcrumbs\Views\Breadcrumbs;
use Osm\Ui\Forms\Views\Form;
use Osm\Ui\Inputs\Views\Input;
use Osm\Ui\MenuBars\Views\Heading;
use Osm\Ui\Menus\Items\Type;

return [
    '@include' => ['page'],
    '#page' => [
        'modifier' => '-products-edit',
        'content' => Container::new([
            'id' => 'content',
            'id_' => null,
            'modifier' => 'page-section',
            'views' => [
                'breadcrumbs' => Breadcrumbs::new([
                    'id' => 'breadcrumbs',
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
                    'id' => 'heading',
                    'items' => [
                        'save' => [
                            'type' => Type::COMMAND,
                            'title' => osm_t("Save"),
                            'modifier' => '-filled',
                            'sort_order' => 10,
                        ],
                        'delete' => [
                            'type' => Type::COMMAND,
                            'title' => osm_t("Delete"),
                            'sort_order' => 20,
                        ],
                    ],
                ]),
                'form' => Form::new([
                    'id' => 'form',
                    'route' => 'POST /products/edit',
                    'submitting_message' => osm_t("Saving product data ..."),
                    'sheet' => 'products',
                    'autocomplete_prefix' => 'backend-products__',
                    'focus' => true,
                    'views' => [
                        'title' => Input::new([
                            'name' => 'title',
                            'title' => osm_t("Title"),
                            'required' => true,
                            'autocomplete' => 'off',
                        ]),
                    ],
                ]),
            ],
        ]),
        'translations' => [

        ],
    ],
];