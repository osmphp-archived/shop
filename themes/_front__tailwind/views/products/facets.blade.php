@if ($facets->count)
<div>
    @if (count($selections))
        <div>
            <h3>@__("Applied filters")</h3>
            <ul>
                @foreach ($selections as $selection)
                    <li>
                        <x-dynamic-component :component="$selection->component"
                            :selection="$selection" />
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <h3>@__("Filter by")</h3>
        <ul>
            @foreach ($facets as $facet)
                <li>
                    <x-dynamic-component :component="$facet->component"
                        :facet="$facet" />
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
