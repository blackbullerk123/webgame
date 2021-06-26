
<style>
    a.disabled {
    pointer-events: none;
    cursor: default;
}
</style>
@if ($paginator->hasPages())
    <ul class="nk-pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a class="nk-pagination-prev disabled"><span class="ion-ios-arrow-back"></span></a>
        @else
        <a class="nk-pagination-prev" href="{{ $paginator->previousPageUrl() }}"><span class="ion-ios-arrow-back"></span></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <a class="page-numbers disabled" href="#">{{ $element }}</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <nav><a class="page-numbers nk-pagination-current" aria-current="page">{{ $page }}</a></nav>
                    @else
                    <nav><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></nav>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a class="nk-pagination-next" href="{{ $paginator->nextPageUrl() }}"><span class="ion-ios-arrow-forward"></span></a>
        @else
        <a class="nk-pagination-next disabled" href="{{ $paginator->nextPageUrl() }}"><span class="ion-ios-arrow-forward"></span></a></li>
        @endif
    </ul>
@endif
