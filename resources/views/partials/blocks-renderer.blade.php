{{-- Universal blocks renderer --}}
{{-- 
    Usage: @include('partials.blocks-renderer', ['blocks' => $page_blocks])
    OR: @include('partials.blocks-renderer', ['blocks' => $your_field_name])
--}}

@if(isset($blocks) && $blocks)
    <div class="content-blocks flex flex-col w-full">
        @foreach($blocks as $block)
            @if(view()->exists('blocks.' . $block['type']))
                @include('blocks.' . $block['type'], ['block' => $block])
            @else
                {{-- Fallback if block template doesn't exist --}}
                <div class="bg-warning text-warning-foreground rounded-panel-sm p-4">
                    <strong>Missing Block Template:</strong> 
                    <code>blocks/{{ $block['type'] }}.blade.php</code>
                    <br>
                    <small>Block type: {{ $block['type'] }}</small>
                </div>
            @endif
        @endforeach
    </div>
@endif