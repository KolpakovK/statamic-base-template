<div class="wrapper blog-paginated-wrapper {{ $block->block_settings->block_classes ?? '' }}" id="{{ $block->block_settings->block_id ?? '' }}">
    <section class="block blog-paginated-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container blog-paginated-container py-8 {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            
            <s:collection
                from="posts"
                paginate="true"
                :limit="$block->limit"
                on_each_side="1"
                as="posts"
            >
                @isset($posts)
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-12 gap-8">
                        @foreach ($posts as $post)
                            <x-entry-posts
                                :image="$post->preview_image"
                                :url="$post->url"
                                :title="$post->title"
                                :excerpt="$post->excerpt"
                                :date="$post->date"
                                :categories="$post->categories"
                            />
                        @endforeach
                    </div>
                @endisset

                @isset($paginate)
                    <x-pagination class="mt-20" :$paginate />
                @endisset
            </s:collection>
            
        </div>
    </section>
</div>