<div class="flex flex-col gap-12 w-full @if($block->dev_details['class']) {{ $block->dev_details['class'] }} @endif" 
    style="grid-column: span {{ $block->col_span ?? 1 }};"
    @if($block->dev_details['attributes']) {{ $block->dev_details['attributes'] }} @endif
    >
    <div class="flex flex-col gap-4 @if($block->block_layout == 'center') text-center @endif">
        @if($block->heading)
            <h2 class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance">
                {!! $block->heading !!}
            </h2>
        @endif

        @if($block->article)
            <x-article :article="$block->article" />
        @endif

        @if($block->buttons)
            <div class="flex flex-wrap gap-4 manual-buttons">
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

    @if($block->cards_group->cards)
        <div class="w-full flex flex-col lg:grid gap-4 manual-grids  @if($block->cards_group->dev_details) {{ $block->cards_group->dev_details->class }} @endif"
        @if($block->cards_group->dev_details) {{ $block->cards_group->dev_details->attributes }} @endif
        style="grid-template-columns: repeat({{ $block->cards_group->cards_columns ?? 2 }}, minmax(0, 1fr));">
            @foreach($block->cards_group->cards as $card)
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
        <x-picture :image="$block->image" class="w-full h-[450px]" :cover="$block->image_scaling=='cover'" :contain="$block->image_scaling=='contain'"/>
    @endif
</div>