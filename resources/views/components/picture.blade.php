@props([
    'image' => null,
    'class' => '',
    'w' => null,
    'h' => null,
    'cover' => false,
    'lazy' => true,
    'caption' => null,
    'contain' => false,
])

{{-- Handle both single asset and asset collection --}}
@if ($image)
    <figure {{ $attributes->class(['picture', 'picture-component', $class]) }}>
        @if ($image->extension() === 'svg' || $image->extension() === 'gif')
            <img 
                @if ($cover) class="picture__image picture-image size-full object-cover"
                    style="object-position: {{ Statamic::modify($image->focus)->backgroundPosition() }}"
                @else
                    class="picture__image picture-image" 
                @endif
                src="{{ $image->url }}" alt="{{ $image->alt }}"
                @if ($lazy) loading="lazy" @endif 
                decoding="async" width="{{ $image->width }}"
                height="{{ $image->height }}" 
            />
        @elseif ($w && $h)
            <s:glide :src="$image->url" :width="$w" :height="$h">
                <img src="{{ $url }}" 
                    @if ($cover) class="picture__image size-full object-cover"
                        style="object-position: {{ Statamic::modify($image->focus)->backgroundPosition() }}; border-radius: var(--radius-panel-sm);"
                    @elseif ($contain)
                        class="picture__image size-full object-contain"
                        style="border-radius: var(--radius-panel-sm);"
                    @else
                        class="picture__image"
                        style="border-radius: var(--radius-panel-sm);" 
                    @endif
                        alt="{{ $image->alt }}"
                        @if ($lazy) loading="lazy" @endif decoding="async"
                    />
            </s:glide>
        @else
            <img @if ($cover) class="picture__image size-full object-cover"
                    style="object-position: {{ Statamic::modify($image->focus)->backgroundPosition() }}; border-radius: var(--radius-panel-sm);"
                @elseif ($contain)
                    class="picture__image size-full object-contain"
                    style="border-radius: var(--radius-panel-sm);"
                @else
                    class="picture__image"
                    style="border-radius: var(--radius-panel-sm);" @endif
                src="{{ $image->url }}" alt="{{ $image->alt }}"
                @if ($lazy) loading="lazy" @endif decoding="async" width="{{ $image->width }}"
                height="{{ $image->height }}" />
        @endif

        @if ($caption)
            <figcaption class="picture__caption picture-caption">
                <span class="caption-text">{!! $caption !!}</span>
            </figcaption>
        @endif
    </figure>
@endif
