<div class="w-full"
    style="grid-column: span {{ $block->col_span ?? 1 }};">
    @if($block->form)
        <x-form :form="$block->form" />
    @endif
</div>