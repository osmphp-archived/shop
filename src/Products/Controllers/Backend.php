<?php

namespace Osm\Shop\Products\Controllers;

use Osm\Framework\Http\Controller;
use Osm\Framework\Http\Exceptions\NotFound;
use Osm\Framework\Layers\Layout;
use Osm\Ui\Forms\Views\Form;

/**
 * @property Layout $edit_layout @required
 * @property Form $edit_form @required
 * @property object $edit_data
 */
class Backend extends Controller
{
    protected function default($property) {
        switch ($property) {
            case 'edit_layout': return osm_layout('products_edit', [
                '#form' => [
                    'row_id' => $this->query['id'] ?? null,
                ],
            ]);
            case 'edit_form': return $this->edit_layout->select('#form');
            case 'edit_data': return $this->edit_form->data;
        }

        return parent::default($property);
    }

    public function productsPage() {
        return osm_layout('products', [
            '#page' => [
                'title' => osm_t("Products"),
            ],
            // bind data to views
        ]);
    }

    public function editPage() {
        if (!$this->edit_form->load()) {
            throw new NotFound(osm_t("Product not found"));
        }

        $title = $this->edit_data
            ? $this->edit_data->title
            : osm_t("New Product");

        return $this->edit_layout->load([
            '#page' => [
                'title' => $title,
            ],
            '#breadcrumbs' => [
                'items' => [
                    'product' => [
                        'title' => $title,
                    ],
                ],
            ],
        ]);
    }

    public function edit() {
        return (object)[];
    }
}