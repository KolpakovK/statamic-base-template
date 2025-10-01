<div class="w-full flex flex-col lg:grid gap-4"
    style="grid-template-columns: repeat({{ $block->amount_columns ?? 2 }}, minmax(0, 1fr)); grid-column: span {{ $block->col_span ?? 1 }};">
    @if($block->cards)
        @foreach($block->cards as $card)
            <x-card 
                :icon="$card->icon ?? null"
                :image="$card->image ?? null"
                :heading="$card->heading ?? null"
                :article="$card->article ?? null"
                :buttons="$card->buttons ?? null"
            />
        @endforeach
    @endif
</div>