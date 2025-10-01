<div class="w-full"
    style="grid-column: span {{ $block->col_span ?? 1 }};">
    @if($block->image)
        <x-picture :image="$block->image" class="w-full h-[450px]" :cover="$block->image_scaling=='cover'" :contain="$block->image_scaling=='contain'"/>
    @endif
</div>