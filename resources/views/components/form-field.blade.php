@props([
    'field' => null,
])

@php
    // Преобразование процентной ширины в количество колонок из 12
    $width = $field['width'] ?? 100;
    $columns = match($width) {
        25 => 3,   // 25% = 3/12 колонки
        33 => 4,   // 33% = 4/12 колонки  
        50 => 6,   // 50% = 6/12 колонок
        66 => 8,   // 66% = 8/12 колонок
        75 => 9,   // 75% = 9/12 колонок
        100 => 12, // 100% = 12/12 колонок
        default => 12
    };
@endphp

{{-- {!! Statamic::modify($field)->toJson() !!} --}}
<div class="flex flex-col gap-3 form-field"
style="grid-column: span {{ $columns }} / span {{ $columns }};">

    <label class="text-base text-foreground form-label" for="{{ $field['name'] }}">{{ $field['display'] }}  @if(@isset($field['validate']) && $field['validate']) <span class="text-destructive">*</span> @endif</label>

    @if($field['type'] === 'textarea')
        <textarea 
            name="{{ $field['name'] }}" 
            id="{{ $field['name'] }}" 
            value="{{ old($field['name'], $field['value'] ?? '') }}"
            @if(@isset($field['validate']) && $field['validate']) required @endif
            rows="10"
            class="form-textarea w-full text-base border px-2 py-1 min-h-8 border-border rounded-input bg-background text-foreground placeholder:text-foreground-muted
            focus:outline-none focus:ring-4 focus:ring-ring/25 focus:ring-offset-2 focus:ring-offset-background"
        ></textarea>
    @else
        <input 
            type="{{ $field['type'] ?? 'text' }}" 
            name="{{ $field['name'] }}" 
            id="{{ $field['name'] }}" 
            value="{{ old($field['name'], $field['value'] ?? '') }}" 
            class="form-input w-full text-base border px-2 py-1 min-h-8 border-border rounded-input bg-background text-foreground placeholder:text-foreground-muted
            focus:outline-none focus:ring-4 focus:ring-ring/25 focus:ring-offset-2 focus:ring-offset-background"
            @if(@isset($field['validate']) && $field['validate']) required @endif
            @if(@isset($field['placeholder'])) placeholder="{{ $field['placeholder'] }}" @endif
        />
    @endif

    @if(@isset($field['instructions']))
        <p class="text-sm text-foreground-muted form-instructions">{{ $field['instructions'] }}</p>
    @endif

    @if(@isset($field['error']))
        <p class="text-sm text-destructive form-error">{{ $field['error'] }}</p>
    @endif
</div>