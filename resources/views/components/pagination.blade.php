{{--
    Docs: https://statamic.dev/tags/collection#pagination
--}}

@props(['paginate' => []])

@if ($paginate['total_pages'] > 1)
    @php
        $hasSlider = count($paginate['links']['segments']['slider']) > 0;
        $hasLast = count($paginate['links']['segments']['last']) > 0;
    @endphp

    <div {{ $attributes }}>
        @section('pagination')
            @if ($paginate['prev_page'])
                <link rel="prev" href="{{ $paginate['prev_page'] }}" />
            @endif

            @if ($paginate['next_page'])
                <link rel="next" href="{{ $paginate['next_page'] }}" />
            @endif
        @endsection

        <nav class="flex items-center justify-center gap-1 md:items-start">
            <a
                href="{{ $paginate['prev_page'] ?? 'javascript:void(0)' }}"
                @class([
                    'btn btn--ghost shrink-0',
                    'pointer-events-none opacity-50' => ! $paginate['prev_page'],
                ])
            >
                <i class="ti ti-chevron-left"></i>
                <span class="sr-only md:not-sr-only">Previous</span>
            </a>

            <ul class="hidden flex-wrap gap-1 md:flex">
                @foreach (Arr::get($paginate, 'links.segments.first', []) as $segment)
                    @if ($segment['page'] == $paginate['current_page'])
                        <div class="flex items-center justify-center size-8 bg-primary rounded-panel-sm">
                            <span class="text-sm font-semibold text-background">{{ $segment['page'] }}</span>
                        </div>
                    @else
                        <a href="{{ $segment['url'] }}" class="flex items-center justify-center size-8 bg-background border border-border rounded-panel-sm">
                            <span class="text-sm font-semibold text-foreground">{{ $segment['page'] }}</span>
                        </a>
                    @endif
                @endforeach

                @if ($hasSlider)
                    <div class="flex items-center justify-center size-8 bg-background border border-border rounded-panel-sm">
                        <span class="text-sm font-semibold text-foreground">...</span>
                    </div>
                @endif

                @foreach (Arr::get($paginate, 'links.segments.slider', []) as $segment)
                    @if ($segment['page'] == $paginate['current_page'])
                        <div class="flex items-center justify-center size-8 bg-primary rounded-panel-sm">
                            <span class="text-sm font-semibold text-background">{{ $segment['page'] }}</span>
                        </div>
                    @else
                        <a href="{{ $segment['url'] }}" class="flex items-center justify-center size-8 bg-background border border-border rounded-panel-sm">
                            <span class="text-sm font-semibold text-foreground">{{ $segment['page'] }}</span>
                        </a>
                    @endif
                @endforeach

                @if ($hasSlider || $hasLast)
                    <div class="flex items-center justify-center size-8 bg-background border border-border rounded-panel-sm">
                        <span class="text-sm font-semibold text-foreground">...</span>
                    </div>
                @endif

                @foreach (Arr::get($paginate, 'links.segments.last', []) as $segment)
                    @if ($segment['page'] == $paginate['current_page'])
                        <div class="flex items-center justify-center size-8 bg-primary rounded-panel-sm">
                            <span class="text-sm font-semibold text-background">{{ $segment['page'] }}</span>
                        </div>
                    @else
                        <a href="{{ $segment['url'] }}" class="flex items-center justify-center size-8 bg-background border border-border rounded-panel-sm">
                            <span class="text-sm font-semibold text-foreground">{{ $segment['page'] }}</span>
                        </a>
                    @endif
                @endforeach
            </ul>

            <p class="content-sm shrink-0 leading-none font-semibold md:hidden">
                {{ $paginate['current_page'] }} of {{ $paginate['total_pages'] }}
            </p>

            <a
                href="{{ $paginate['next_page'] ?? 'javascript:void(0)' }}"
                @class([
                    'btn btn--ghost shrink-0',
                    'pointer-events-none opacity-50' => ! $paginate['next_page'],
                ])
            >
                <span class="sr-only md:not-sr-only">Next</span>
                <i class="ti ti-chevron-right"></i>
            </a>
        </nav>
    </div>
@endif
