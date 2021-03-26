<?php
use function Osm\__;
?>
<x-products::layout
    :title="__('Search results for \':search_phrase\'', ['search_phrase' => $searchPhrase])"
>
    <header class="col-span-12">
        <h1>{{ __('Search results for \':search_phrase\'', ['search_phrase' => $searchPhrase]) }}</h1>
    </header>
    <main class="col-span-12 md:col-span-9 md:col-start-4">
        <x-products::grid/>
    </main>
    <aside class="hidden md:block md:col-span-3 md:col-start-1 md:row-start-2">
        <x-products::facets/>
    </aside>
</x-products::layout>