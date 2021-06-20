
<style>
    a.disabled {
    pointer-events: none;
    cursor: default;
}
</style>
@if ($paginator->hasPages())
    <ul class="page-pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li><a class="prev page-numbers disabled">@lang('news.prev')</a></li>
        @else
        <li><a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}">@lang('news.prev')</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li><a class="page-numbers disabled" href="#">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li><a class="page-numbers current" aria-current="page">{{ $page }}</a></li>
                    @else
                    <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li><a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">@lang('news.next')</a></li>
        @else
        <li><a class="next page-numbers disabled" href="{{ $paginator->nextPageUrl() }}">@lang('news.next')</a></li>
        @endif
    </ul>
@endif
