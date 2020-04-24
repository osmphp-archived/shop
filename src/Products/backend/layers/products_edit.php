<?php

use Osm\Framework\Views\Views\Text;
use Osm\Ui\Breadcrumbs\Views\Breadcrumbs;
use Osm\Ui\Forms\Views\Form;
use Osm\Ui\Forms\Views\Section;
use Osm\Ui\Forms\Views\Tab;
use Osm\Ui\Forms\Views\StringField;
use Osm\Ui\MenuBars\Views\Heading;
use Osm\Ui\Menus\Items\Type;

return [
    '@include' => ['page'],
    '#page.modifier' => '-products-edit',
    '#page.translations' => [
    ],
    '#content.items' => [
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
            'items' => [
                'basics' => Tab::new([
                    'title' => osm_t("Basics"),
                    'sort_order' => 10,
                    'items' => [
                        'title' => StringField::new([
                            'title' => osm_t("Title"),
                            'required' => true,
                            'autocomplete' => 'off',
                            'sort_order' => 10,
                        ]),
                        'type' => StringField::new([
                            'title' => osm_t("Type"),
                            'required' => true,
                            'sort_order' => 20,
                            'wrap_modifier' => '-narrow',
                        ]),
                        'sku' => StringField::new([
                            'title' => osm_t("SKU"),
                            'required' => true,
                            'sort_order' => 30,
                            'wrap_modifier' => '-narrow',
                        ]),
                        'url_key' => StringField::new([
                            'title' => osm_t("URL Key"),
                            'required' => true,
                            'sort_order' => 40,
                            'wrap_modifier' => '-narrow',
                        ]),
                        'price' => StringField::new([
                            'title' => osm_t("Price"),
                            'required' => true,
                            'sort_order' => 50,
                            'wrap_modifier' => '-narrow',
                        ]),
                        'visibility' => Section::new([
                            'title' => osm_t("Visibility"),
                            'sort_order' => 60,
                            'items' => [
                                'enabled' => StringField::new([
                                    'title' => osm_t("Enabled"),
                                    'sort_order' => 10,
                                ]),
                                'show_in_listing' => StringField::new([
                                    'title' => osm_t("Show On Listing Pages"),
                                    'sort_order' => 20,
                                ]),
                                'show_in_search' => StringField::new([
                                    'title' => osm_t("Show On Search Page"),
                                    'sort_order' => 30,
                                ]),
                            ],
                        ]),
                    ],
                ]),


                'content' => Tab::new([
                    'title' => osm_t("Content"),
                    'sort_order' => 20,
                    'items' => [
                        'summary' => StringField::new([
                            'title' => osm_t("Summary"),
                            'sort_order' => 10,
                        ]),
                        'description' => StringField::new([
                            'title' => osm_t("Description"),
                            'sort_order' => 20,
                        ]),
                        'seo' => Section::new([
                            'title' => osm_t("SEO Content"),
                            'sort_order' => 30,
                            'items' => [
                                'meta_title' => StringField::new([
                                    'title' => osm_t("Meta Title"),
                                    'sort_order' => 10,
                                ]),
                                'meta_description' => StringField::new([
                                    'title' => osm_t("Meta Description"),
                                    'sort_order' => 20,
                                ]),
                                'meta_keywords' => StringField::new([
                                    'title' => osm_t("Meta Keywords"),
                                    'sort_order' => 30,
                                ]),
                            ],
                        ]),
                    ],
                ]),

                'images' => Tab::new([
                    'title' => osm_t("Images"),
                    'sort_order' => 30,
                    'items' => [
                        'image' => StringField::new([
                            'title' => osm_t("Image"),
                            'sort_order' => 10,
                        ]),

                        # Section: Gallery
                        'image_gallery' => Text::new([
                            'contents' => 'Image gallery',
                            'sort_order' => 20,
                        ]),
                    ],
                ]),

                'pricing' => Tab::new([
                    'title' => osm_t("Pricing"),
                    'sort_order' => 40,
                    'items' => [
                        'special_price' => Section::new([
                            'title' => osm_t("Special Price"),
                            'sort_order' => 10,
                            'items' => [
                                'special_price' => StringField::new([
                                    'title' => osm_t("Special Price"),
                                    'sort_order' => 10,
                                ]),
                                'special_starts_at' => StringField::new([
                                    'title' => osm_t("Starting At"),
                                    'sort_order' => 20,
                                    'wrap_modifier' => '-narrow',
                                ]),
                                'special_ends_at' => StringField::new([
                                    'title' => osm_t("Ending At"),
                                    'sort_order' => 30,
                                    'wrap_modifier' => '-narrow',
                                ]),
                            ],
                        ]),
                    ],
                ]),


                'related_products' => Tab::new([
                    'title' => osm_t("Related Products"),
                    'sort_order' => 50,
                ]),

                'similar_products' => Tab::new([
                    'title' => osm_t("Similar Products"),
                    'sort_order' => 60,
                ]),

                'checkout_products' => Tab::new([
                    'title' => osm_t("Checkout Products"),
                    'sort_order' => 70,
                ]),
            ],
        ]),
    ],
];