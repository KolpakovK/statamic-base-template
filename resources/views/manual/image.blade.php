<div class="w-full @if($block->dev_details['class']) {{ $block->dev_details['class'] }} @endif"
    style="grid-column: span {{ $block->col_span ?? 1 }};"
    @if($block->dev_details['attributes']) {{ $block->dev_details['attributes'] }} @endif
    >
    @if($block->image)
        <x-picture :image="$block->image" class="w-full h-[450px]" :cover="$block->image_scaling=='cover'" :contain="$block->image_scaling=='contain'"/>
    @endif
</div>