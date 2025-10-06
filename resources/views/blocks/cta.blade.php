<div class="wrapper cta-wrapper {{ $block->block_settings->block_classes ?? '' }}" id="{{ $block->block_settings->block_id ?? '' }}">
    <section class="block cta-block bg-background" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container cta-container flex flex-col gap-12 py-8 
        {{ $block->block_settings->container_classes ?? '' }}
        @if($block->block_layout == 'main') dark @endif" 
        style="{{ $block->block_settings->container_styles ?? '' }}">
            <div class="
                @if($block->block_layout == 'main') p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md @endif 
                @if($block->block_layout == 'image') p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md @endif 
                w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center cta-content-column"

                style="@if($block->image && $block->block_layout == 'image') background-image: url('{{ $block->image->url }}'); background-size: cover; background-position: center; @endif"
            >

                <div class="flex flex-col gap-12">
                    <div class="flex flex-col gap-4 cta-content">
                        @if($block->heading)
                            <h2 class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance">
                                {!! $block->heading !!}
                            </h2>
                        @endif

                        @if($block->article)
                            <x-article :article="$block->article" />
                        @endif

                        @if($block->buttons)
                            <div class="flex flex-wrap gap-4">
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
                </div>

                <div class="flex flex-col gap-4">
                    @if($block->block_layout == 'cards')
                        @if($block->cards)
                            <div class="w-full flex flex-col lg:grid gap-4 cta-cards"
                            style="grid-template-columns: repeat(2, minmax(0, 1fr));">
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
                    @else
                        @if($block->form)
                            <x-form :form="$block->form" />
                        @endif
                    @endif
                </div>

            </div>

            
        </div>
    </section>
</div>