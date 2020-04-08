<?php

use Osm\Framework\Views\Views\Container;
use Osm\Framework\Views\Views\Text;
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
                        #region Tab: Basics (mandatory values)
                        'title' => Input::new([
                            'title' => osm_t("Title"),
                            'required' => true,
                            'autocomplete' => 'off',
                            'sort_order' => 10,
                        ]),
                        'type' => Input::new([
                            'title' => osm_t("Type"),
                            'required' => true,
                            'sort_order' => 20,
                        ]),
                        'sku' => Input::new([
                            'title' => osm_t("SKU"),
                            'required' => true,
                            'sort_order' => 30,
                        ]),
                        'url_key' => Input::new([
                            'title' => osm_t("URL Key"),
                            'required' => true,
                            'sort_order' => 40,
                        ]),
                        'price' => Input::new([
                            'title' => osm_t("Price"),
                            'required' => true,
                            'sort_order' => 42,
                        ]),

                        # Section: Visibility
                        'enabled' => Input::new([
                            'title' => osm_t("Enabled"),
                            'sort_order' => 44,
                        ]),
                        'show_in_listing' => Input::new([
                            'title' => osm_t("Show On Listing Pages"),
                            'sort_order' => 46,
                        ]),
                        'show_in_search' => Input::new([
                            'title' => osm_t("Show On Search Page"),
                            'sort_order' => 48,
                        ]),
                        #endregion

                        #region Tab: Content
                        'summary' => Input::new([
                            'title' => osm_t("Summary"),
                            'sort_order' => 50,
                        ]),
                        'description' => Input::new([
                            'title' => osm_t("Description"),
                            'sort_order' => 60,
                        ]),

                        # Section: SEO Content
                        'meta_title' => Input::new([
                            'title' => osm_t("Meta Title"),
                            'sort_order' => 62,
                        ]),
                        'meta_description' => Input::new([
                            'title' => osm_t("Meta Description"),
                            'sort_order' => 64,
                        ]),
                        'meta_keywords' => Input::new([
                            'title' => osm_t("Meta Keywords"),
                            'sort_order' => 66,
                        ]),
                        #endregion

                        #region Tab: Images
                        'image' => Input::new([
                            'title' => osm_t("Image"),
                            'sort_order' => 70,
                        ]),

                        # Section: Gallery
                        'image_gallery' => Text::new([
                            'contents' => 'Image gallery',
                            'sort_order' => 75,
                        ]),
                        #endregion

                        #region Tab: Pricing
                        # Section: Special Price
                        'special_price' => Input::new([
                            'title' => osm_t("Special Price"),
                            'sort_order' => 110,
                        ]),
                        'special_starts_at' => Input::new([
                            'title' => osm_t("Special Price Starts At"),
                            'sort_order' => 120,
                        ]),
                        'special_ends_at' => Input::new([
                            'title' => osm_t("Special Price Ends At"),
                            'sort_order' => 130,
                        ]),
                        #endregion

                        #region Tab: Offer Together
                        'related_products' => Text::new([
                            'contents' => 'Related products',
                            'sort_order' => 190,
                        ]),
                        #endregion

                        #region Tab: Offer Instead
                        'upsells' => Text::new([
                            'contents' => 'Upsells',
                            'sort_order' => 200,
                        ]),
                        #endregion

                        #region Tab: Offer At Checkout
                        'crosssells' => Text::new([
                            'contents' => 'Crossells',
                            'sort_order' => 210,
                        ]),
                        #endregion
                    ],
                ]),
            ],
        ]),
        'translations' => [

        ],
    ],
];