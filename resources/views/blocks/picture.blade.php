<div class="wrapper picture-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block picture-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container picture-container py-8 {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            @if($block->image)
                <x-picture :image="$block->image" class="w-full h-[450px]" :cover="$block->image_scaling=='cover'" :contain="$block->image_scaling=='contain'" :w="$block->image_width" :h="$block->image_height"/>
            @endif
        </div>
    </section>
</div>