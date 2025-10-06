<div class="wrapper blog-grid-wrapper {{ $block->block_settings->block_classes ?? '' }}" id="{{ $block->block_settings->block_id ?? '' }}">
    <section class="block blog-grid blog-grid-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container py-8 blog-grid-container {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            @if ($block->query->value() === 'custom')
                @php($entries = $block->entries)
            @elseif ($block->query->value() === 'latest')
                @php($entries = Statamic::tag('collection:posts')->limit($block->limit)->sort('date:desc')->fetch())
            @elseif ($block->query->value() === 'featured')
                @php($entries = Statamic::tag('collection:posts')->limit($block->limit)->featured()->sort('order')->fetch())
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 blog-grid-list">
                @foreach ($entries as $entry)
                    <x-entry-posts
                        :image="$entry->preview_image"
                        :url="$entry->url"
                        :title="$entry->title"
                        :excerpt="$entry->excerpt"
                        :date="$entry->date"
                    />
                @endforeach
            </div>
        </div>
    </section>
</div>