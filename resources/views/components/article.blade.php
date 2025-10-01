@props([
    'article' => null,
])

@if($article)
    <div {{ $attributes->class(['article', 'article-component']) }}>
        <div class="article-content">
            @foreach($article as $item)
                {{-- Handle different types of article content --}}
                @if($item['type'] === 'text')
                    {{-- Raw HTML text content --}}
                    <div class="article__content article-text-block">
                        <div class="article-text-content">{!! $item['text'] !!}</div>
                    </div>
                
                @elseif($item['type'] === 'buttons')
                    {{-- Button sets --}}
                    <div class="article__buttons article-buttons-block">
                        @if(isset($item['buttons']))
                            <div class="article-buttons-list">
                                @foreach($item['buttons'] as $button)
                                    @if($button['type'] === 'button')
                                        <x-button 
                                            :label="$button->label"
                                            :link="$button->link"
                                            :variant="$button->variant"
                                            :show_icon="$button->show_icon"
                                            :icon="$button->icon ?? null"
                                        />
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
            
                @elseif($item['type'] === 'picture')
                    {{-- Picture sets --}}
                    <div class="article__media">
                        <x-picture :image="$item['image']" :contain="$item['image_scaling'] == 'contain'" :cover="$item['image_scaling'] == 'cover'" class="aspect-[16/9]" :w="$item['image_width']" :h="$item['image_height']"/>
                    </div>
                
                @else
                    {{-- Fallback for unknown types --}}
                    <div class="article__unknown article-unknown-block">
                        <div class="article-error-content">
                            <p>Unknown article item type: {{ $item['type'] }}</p>
                            <pre>{{ json_encode($item, JSON_PRETTY_PRINT) }}</pre>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endif