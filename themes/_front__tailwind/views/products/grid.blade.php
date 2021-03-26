<div>
    @if (!$items->count)
        <p>@__("We don't have these products. Please try another search phrase, or another set of filter criteria.")</p>
    @else
        <div>@__(":count product(s) found", ['count' => $items->count])</div>
        <div>
            <label>
                @__("Sort by")
                <select>
                    @foreach ($sort_orders as $sortOrder)
                        <option value="{{ $sortOrder->name }}"
                            @if($sortOrder->current)selected @endif
                        >
                            {{ $sortOrder->title }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>
        <ul class="js-infinite" data-infinite='{
            "url": "{{ $infinite_url }}",
            "count": {{ $items->count }},
            "offset": {{ $items->offset }}
            "limit": {{ $items->limit }}
        }'>
            @foreach ($items as $item)
                <li>
                    <x-products::item :item="$item"/>
                </li>
            @endforeach
            <li class="osm-infinite__placeholder hidden">
                ...
            </li>
        </ul>
        <div class="js-hidden">
            <ul>
                @foreach($pages as $page)
                    <li>
                        @if($page->current)
                            <span>{{ $page->number }}</span>
                        @else
                            <a href="{{ $page->url }}">{{ $page->number }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
