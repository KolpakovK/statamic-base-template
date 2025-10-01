@props([
    'heading' => null,
    'level' => null,
])

@if($heading)
    @php
        // Определяем уровень заголовка по длине или передаем явно
        if ($level) {
            $tag = 'h' . $level;
        } else {
            // Простая эвристика для определения уровня заголовка
            $lines = explode("\n", $heading);
            $firstLine = $lines[0] ?? '';
            $length = strlen($firstLine);
            
            if ($length < 30) {
                $tag = 'h1';
            } elseif ($length < 60) {
                $tag = 'h2';
            } else {
                $tag = 'h3';
            }
        }
        
        // Обработка переносов строк для адаптивности
        $processedHeading = str_replace("\n", '<br class="hidden lg:block">', $heading);
    @endphp
    
    <{{ $tag }} {{ $attributes->class([
        'heading',
        'heading-component',
        'heading--h1' => $tag === 'h1',
        'heading--h2' => $tag === 'h2', 
        'heading--h3' => $tag === 'h3',
        'heading--h4' => $tag === 'h4',
        'heading--h5' => $tag === 'h5',
        'heading--h6' => $tag === 'h6',
        'heading-level-' . substr($tag, 1),
        'heading-content'
    ]) }}>
        <span class="heading-text">{!! $processedHeading !!}</span>
    </{{ $tag }}>
@endif