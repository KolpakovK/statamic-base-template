@props([
    'text' => null,
])

@if($text)
    <div {{ $attributes->class(['text-content', 'text-component']) }}>
        @php
            // Простая обработка текста с поддержкой параграфов
            $paragraphs = explode("\n\n", $text);
        @endphp
        
        <div class="text-paragraphs">
            @foreach($paragraphs as $paragraph)
                @if(trim($paragraph))
                    <p class="paragraph text-paragraph">
                        <span class="paragraph-content">{!! nl2br(e(trim($paragraph))) !!}</span>
                    </p>
                @endif
            @endforeach
        </div>
    </div>
@endif