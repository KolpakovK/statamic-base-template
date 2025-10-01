<div class="wrapper documentation-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block documentation-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container documentation-container py-8 {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            <div class="grid grid-cols-1 lg:grid-cols-8 gap-8">
                <div class="flex flex-col gap-2 col-span-1 lg:col-span-2 documentation-navigation">
                    @if($block->navigation)
                        {{-- {!! Statamic::modify($block->navigation)->toJson() !!} --}}
                        <statamic:nav :handle="$block->navigation">
                            @if($url=='#' || $url=='')
                                <p class="text-sm text-foreground-muted uppercase tracking-wider pl-4">{{ $title }}</p>
                            @else
                                <x-button 
                                    :label="$title" 
                                    :link="$url" 
                                    variant="{{ $url == $current_uri ? 'ghost' : 'link' }}" 
                                    class="justify-start text-left w-full"
                                />
                            @endif

                            @if($children && count($children) > 0)
                                <div class="flex flex-col pl-4 mt-2 gap-2 documentation-subnavigation">
                                    @foreach($children as $child)
                                        <x-button 
                                            :label="$child['title']" 
                                            :link="$child['url']" 
                                            variant="{{ $child['url'] == $current_uri ? 'ghost' : 'link' }}" 
                                            class="justify-start text-left w-full"
                                        />
                                    @endforeach
                                </div>
                            @endif
                        </statamic:nav>
                    @endif
                </div>

                <div class="flex flex-col gap-8 col-span-1 lg:col-span-4 documentation-content">
                    @if($block->article)
                        <x-article :article="$block->article" />
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>