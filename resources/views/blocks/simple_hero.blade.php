<div class="wrapper simple-hero-wrapper {{ $block->block_settings->block_classes ?? '' }}" id="{{ $block->block_settings->block_id ?? '' }}">
    <section class="block bg-background hero-section simple-hero-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container py-8 flex flex-col gap-8 simple-hero-container {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            <div class="flex flex-col gap-4 w-full max-w-3xl text-center mx-auto simple-hero-content">
                @if($block->heading)
                    <h1 class="text-3xl lg:text-6xl font-medium tracking-tighter text-foreground text-balance simple-hero-heading">
                        {!! $block->heading !!}
                    </h1>
                @endif

                @if($block->text)
                    <p class="text-base text-foreground-secondary simple-hero-text px-0 lg:px-16">
                        {!! $block->text !!}
                    </p>
                @endif

                @if($block->buttons)
                    <div class="flex gap-4 justify-center simple-hero-buttons">
                        @foreach($block->buttons as $button)
                            <x-button 
                                :label="$button->label" 
                                :link="$button->link" 
                                :variant="$button->variant" 
                                :show_icon="$button->show_icon"
                                :icon="$button->icon ?? null"
                            />
                        @endforeach
                    </div>
                @endif
            </div>

            @if($block->image)
                <x-picture :image="$block->image" class="w-full h-[450px] simple-hero-image" :cover="$block->image_scaling=='cover'" :contain="$block->image_scaling=='contain'" :w="$block->image_width" :h="$block->image_height"/>
            @endif
        </div>
    </section>
</div>