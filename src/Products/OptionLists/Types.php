<?php

namespace Osm\Shop\Products\OptionLists;

use Osm\Data\OptionLists\OptionList;

class Types extends OptionList
{
    protected function all() {
        return collect([
            'software' => (object)['title' => osm_t("Software")],
            'services' => (object)['title' => osm_t("Services")],
        ]);
    }
}