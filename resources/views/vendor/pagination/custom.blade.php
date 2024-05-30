@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="custom-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="custom-page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="custom-page-link" aria-hidden="true">Previous</span>
                </li>
            @else
                <li class="custom-page-item">
                    <a class="custom-page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Previous</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="custom-page-item disabled" aria-disabled="true"><span class="custom-page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="custom-page-item active" aria-current="page"><span class="custom-page-link">{{ $page }}</span></li>
                        @else
                            <li class="custom-page-item"><a class="custom-page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="custom-page-item">
                    <a class="custom-page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                </li>
            @else
                <li class="custom-page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="custom-page-link" aria-hidden="true">Next</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
