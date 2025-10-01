{{-- Fallback description generation --}}
@if (isset($seo->collection_defaults) && $seo->collection_defaults && isset($page) && $page)
    @php
        $currentCollection = null;
        if (method_exists($page, 'collection') && $page->collection()) {
            $currentCollection = $page->collection()->handle();
        } elseif (isset($collection)) {
            $currentCollection = $collection;
        }
    @endphp
    
    @if ($currentCollection)
        @foreach ($seo->collection_defaults as $default)
            @if (isset($default['collection']) && $default['collection'] === $currentCollection)
                @if ($default['fallback'] === 'field' && isset($default['field_handle']) && $default['field_handle'])
                    @if (isset($page->{$default['field_handle']}) && $page->{$default['field_handle']})
                        {{ strip_tags(\Illuminate\Support\Str::limit($page->{$default['field_handle']}, 160)) }}
                    @endif
                @elseif ($default['fallback'] === 'custom_text' && isset($default['custom_text']))
                    {{ $default['custom_text'] }}
                @elseif ($default['fallback'] === 'blocks' && isset($page->content) && $page->content)
                    @php
                        $firstText = '';
                        if (is_array($page->content)) {
                            foreach ($page->content as $block) {
                                if (isset($block['type']) && $block['type'] === 'text' && isset($block['text'])) {
                                    $firstText = strip_tags($block['text']);
                                    break;
                                }
                            }
                        } else {
                            $firstText = strip_tags((string)$page->content);
                        }
                    @endphp
                    {{ \Illuminate\Support\Str::limit($firstText, 160) }}
                @endif
                @break
            @endif
        @endforeach
    @endif
@endif