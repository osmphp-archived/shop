<?php

namespace Osm\Shop\Products\Traits;

use Osm\Data\TableQueries\TableQuery;

trait RelationsTrait
{
    /**
     * @param TableQuery $query
     * @param $product
     * @param $image
     */
    public function products__image($query, $product, $image) {
        $query->leftJoin("files AS {$image}",
            "{$product}.image = {$image}.id");
    }

}