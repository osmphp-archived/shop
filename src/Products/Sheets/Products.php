<?php

namespace Osm\Shop\Products\Sheets;

use Osm\Shop\Products\Hints\ProductHint;
use Osm\Data\TableSheets\TableSheet;

class Products extends TableSheet
{
    public $operation_class = ProductOperation::class;
    public $row_class = ProductHint::class;

}