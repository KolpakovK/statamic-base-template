<div class="w-full  @if($block->dev_details['class']) {{ $block->dev_details['class'] }} @endif"
    @if($block->dev_details['attributes']) {{ $block->dev_details['attributes'] }} @endif
    style="grid-column: span {{ $block->col_span ?? 1 }};">
    @if($block->form)
        <x-form :form="$block->form" />
    @endif
</div>