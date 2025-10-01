<div class="wrapper article-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block article-section article-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container article-container {{ $block->block_settings->container_classes ?? '' }}"
            style="{{ $block->block_settings->container_styles ?? '' }}">
            <div class="article-content">
                @if($block->article)
                    <x-article :article="$block->article" />
                @endif
            </div>
        </div>
    </section>
</div>