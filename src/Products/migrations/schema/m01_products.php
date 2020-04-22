<?php

namespace Osm\Shop\Products\Migrations\Schema;

use Osm\Data\Tables\Blueprint;
use Osm\Framework\Migrations\Migration;

class m01_products extends Migration
{
    public function up() {
        $this->db->create('products', function (Blueprint $table) {
            // timestamps
            $table->datetime('created_at')->title("Created At");
            $table->datetime('updated_at')->title("Updated At");

            // basics
            $table->string('type', 20)->title("Type")
                ->required();
            $table->string('sku')->title("SKU")
                ->required();
            $table->string('url_key')->title("URL Key")
                ->required();
            $table->string('title')->title("Title")
                ->required();

            // descriptions
            $table->text('summary')->title("Summary");
            $table->text('description')->title("Description");

            // switches to disable product
            $table->bool('enabled')->title("Enabled")
                ->value(1);
            $table->bool('show_in_listing')->title("Show On Listing Pages")
                ->value(1);
            $table->bool('show_in_search')->title("Show On Search Page")
                ->value(1);

            // basic pricing
            $table->decimal('price')->title("Price")
                ->required();
            $table->decimal('special_price')->title("Special Price")
                ->required();
            $table->datetime('special_starts_at')->title("Special Price Starts At");
            $table->datetime('special_ends_at')->title("Special Price Ends At");

            // meta data
            $table->string('meta_title')->title("Meta Title");
            $table->text('meta_keywords')->title("Meta Keywords");
            $table->text('meta_description')->title("Meta Description");

            // base image
            $table->string('image')->title("Image");

        });

        // image gallery
        $this->db->create('products__images', function (Blueprint $table) {
            $table->int('product')->title("Product")
                ->unsigned()->required()
                ->references('products.id')->on_delete('cascade');
            $table->string('value')->title("Value");
            $table->string('title')->title("Title");
            $table->int('position')->title("Position")
                ->unsigned();
        });

        // relations with other products
        foreach (['related', 'upsells', 'crosssells'] as $relation) {
            $this->db->create("products__{$relation}", function (Blueprint $table) {
                $table->int('product')->title("Product")
                    ->unsigned()->required()
                    ->references('products.id')->on_delete('cascade');
                $table->int('value')->title("Value")
                    ->unsigned()->required()
                    ->references('products.id')->on_delete('cascade');
                $table->int('position')->title("Position")
                    ->unsigned();
            });
        }
    }

    public function down() {
        foreach (['related', 'upsells', 'crosssells'] as $relation) {
            $this->db->drop("products__{$relation}");
        }
        $this->db->drop('products__images');
        $this->db->drop('products');
    }
}
