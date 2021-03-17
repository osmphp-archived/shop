<?php

declare(strict_types=1);

namespace Osm\Shop\Users\Traits;

use Osm\Framework\Data\Query;

trait DataTrait
{
    /** @noinspection PhpUnused */
    public function users(): Query {
        return Query::new(['sheet_name' => 'users']);
    }
}