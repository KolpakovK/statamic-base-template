@props([
    'label' => null,
    'link' => null,
    'variant' => 'primary',
    'show_icon' => false,
    'icon' => null,
    'position' => 'left',
    'type' => 'button',
    'class' => '',
])

@if($label || $icon)
    @php
        $variant = is_object($variant) ? (string) $variant : $variant;
    @endphp
    
    @if($link)
        <a
    @else
        <button type="{{ $type }}"
    @endif
        {{
            $attributes->class([
                'btn',
                'button-component',
                'btn--primary' => $variant === 'primary',
                'btn--secondary' => $variant === 'secondary',
                'btn--link' => $variant === 'link',
                'btn--ghost' => $variant === 'ghost',
                'btn--outline' => $variant === 'outline',
                'btn--destructive' => $variant === 'destructive',
                'button-variant-' . $variant,
                'size-8' => $label == null && $icon,
                'button-icon-only' => $label == null && $icon,
                'button-with-icon' => $show_icon && $icon,
                'button-icon-' . $position => $show_icon && $icon,
                $class,
            ])
        }}

        @if($link)
            href="{{ $link }}"
        @endif
    >
        @if($show_icon && $icon && $position === 'left')
            <i class="ti {{ $icon }} button-icon button-icon-left"></i>
        @endif
        
        @if($label)
            <span class="button-label">{{ $label }}</span>
        @endif
        
        @if($show_icon && $icon && $position === 'right')
            <i class="ti {{ $icon }} button-icon button-icon-right"></i>
        @endif
    @if($link)
        </a>
    @else
        </button>
    @endif
@endif