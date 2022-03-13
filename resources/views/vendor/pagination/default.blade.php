@if ($paginator->hasPages())
    
    @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <p class="active-page">{{ $page }}</p>
                @else
                    <a class="inactive-page" href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

@endif
