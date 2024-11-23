@if ($paginator->hasPages())
    <div style="display: inline-flex; align-items: center; gap: 10px;">
        {{-- First Page Link --}}
        @if ($paginator->onFirstPage())
            <span style="color: #ccc;">&laquo; Previous</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo; Previous</a>
        @endif

        {{-- Pagination Elements --}}
        <div style="display: inline-flex; gap: 15px;">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span style="color: #666;">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span style="font-weight: bold; color: #000;">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next &raquo;</a>
        @else
            <span style="color: #ccc;">Next &raquo;</span>
        @endif
    </div>
@endif
