<div class="wrapper two-columns-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block bg-background two-columns-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container py-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center two-columns-container {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">

            @if($block->block_layout == "left")
                @if($block->image)
                    <x-picture :image="$block->image" class="w-full h-[450px] two-columns-image" cover="true" :w="$block->image_width" :h="$block->image_height"/>
                @endif
            @endif

            <div class="flex flex-col gap-12 two-columns-content">
                <div class="flex flex-col gap-4">
                    @if($block->heading)
                        <h2 class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance two-columns-heading">
                            {!! $block->heading !!}
                        </h2>
                    @endif

                    @if($block->article)
                        <x-article :article="$block->article" class="two-columns-description"/>
                    @endif

                    @if($block->buttons)
                        <div class="flex flex-wrap gap-4 two-columns-buttons">
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

                @if($block->cards)
                    <div class="w-full flex flex-col lg:grid gap-4 two-columns-cards"
                    style="grid-template-columns: repeat({{ $block->cards_columns ?? 2 }}, minmax(0, 1fr));">
                        @foreach($block->cards as $card)
                            <x-card 
                                :icon="$card->icon ?? null"
                                :image="$card->image ?? null"
                                :heading="$card->heading ?? null"
                                :article="$card->article ?? null"
                                :buttons="$card->buttons ?? null"
                            />
                        @endforeach
                    </div>
                @endif
            </div>

            @if($block->block_layout == "right")
                @if($block->image)
                    <x-picture :image="$block->image" class="w-full h-[450px] two-columns-image" :cover="$block->image_scaling=='cover'" :contain="$block->image_scaling=='contain'" :w="$block->image_width" :h="$block->image_height"/>
                @endif
            @endif
        </div>
    </section>
</div>