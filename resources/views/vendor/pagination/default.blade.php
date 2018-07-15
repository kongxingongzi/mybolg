
@if ($paginator->hasPages())
    
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="disabled">上一页</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">上一页</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a>{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="curPage">{{ $page }}</a>
                    @else

                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">下一页</a>
        @else
            <a class="disabled">下一页</a>
        @endif
   
@endif
