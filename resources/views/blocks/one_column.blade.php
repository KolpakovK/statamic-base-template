<div class="wrapper one-column-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block one-column-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container py-8 {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            <div class="flex flex-col gap-12 w-full mx-auto max-w-5xl">
                <div class="flex flex-col gap-4 @if($block->block_layout == 'center') text-center @endif">
                    @if($block->heading)
                        <h2 class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance one-column-heading">
                            {!! $block->heading !!}
                        </h2>
                    @endif

                    @if($block->article)
                        <x-article :article="$block->article" class="one-column-description"/>
                    @endif

                    @if($block->buttons)
                        <div class="flex flex-wrap gap-4 one-column-buttons @if($block->block_layout == 'center') items-center justify-center @endif">
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
                    <div class="w-full flex flex-col lg:grid gap-4 one-column-cards"
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

                @if($block->image)
                    <x-picture :image="$block->image" class="w-full h-[450px] one-column-image" 
                        :cover="$block->image_scaling=='cover'" :contain="$block->image_scaling=='contain'"
                        :w="$block->image_width" :h="$block->image_height"/>
                @endif
            </div>
        </div>
    </section>
</div>