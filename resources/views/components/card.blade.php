@props([
    'icon' => null,
    'image' => null,
    'heading' => null,
    'article' => null,
    'buttons' => null,
    'image' => null,
])

<div class="card">
    @if($icon)
        <div class="card-icon">
            <i class="ti {{ $icon }}"></i>
        </div>
    @endif

    @if($image)
        <div class="card-image">
            <img src="{{ $image }}" class="w-full h-full object-cover aspect-video" alt="{{ $heading ?? 'Card image' }}">
        </div>
    @endif

    <div class="card-content">
        @if($heading)
            <h3 class="text-xl font-medium text-foreground leading-normal">
                {!! $heading !!}
            </h3>
        @endif

        @if($article)
            <x-article :article="$article" />
        @endif

        @if($buttons)
            <div class="flex flex-wrap gap-2">
                @foreach($buttons as $button)
                    <x-button 
                        :label="$button->label" 
                        :link="$button->link" 
                        :variant="$button->variant" 
                        :show_icon="$button->show_icon"
                        :icon="$button->icon ?? null"
                    />
                @endforeach
            </div>
        @endif
    </div>
</div>