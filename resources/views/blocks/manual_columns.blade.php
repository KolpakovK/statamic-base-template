<div class="wrapper manual-columns-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block manual-columns-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container manual-columns-container py-8 flex-col flex lg:grid gap-6 {{ $block->block_settings->container_classes ?? '' }}"
        style="grid-template-columns: repeat({{ $block->amount_columns ?? 2 }}, minmax(0, 1fr)); {{ $block->block_settings->container_styles ?? '' }}">
            {{-- Render each manual column block --}}
            @if($block->columns)
                @foreach($block->columns as $column)
                    @if(view()->exists('manual.' . $column['type']))
                        @include('manual.' . $column['type'], ['block' => $column])
                    @else
                        {{-- Fallback if block template doesn't exist --}}
                        <div class="bg-warning text-warning-foreground rounded-panel-sm p-4">
                            <strong>Missing Block Template:</strong> 
                            <code>manual/{{ $column['type'] }}.blade.php</code>
                            <br>
                            <small>Block type: {{ $column['type'] }}</small>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </section>
</div>