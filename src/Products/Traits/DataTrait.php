<?php

declare(strict_types=1);

namespace Osm\Shop\Products\Traits;

use Osm\Framework\Data\Query;

trait DataTrait
{
    /** @noinspection PhpUnused */
    public function products(): Query {
        return Query::new(['sheet_name' => 'products']);
    }

}