@props(['image', 'url', 'title', 'excerpt', 'date', 'categories'])

<article class="entry-post" {{ $attributes }}>
    <div
        class="aspect-video rounded-panel-sm bg-background-muted overflow-hidden entry-post-image"
    >
        <x-picture :$image w="672" h="378" cover="true" class="w-full h-full" />
    </div>

    <div class="flex gap-2 my-4">
        <p class="text-sm text-foreground-secondary entry-post-date">{{ $date }}</p>
    </div>

    <a href="{{ $url }}" class="group mt-8">
        <h3 class="text-lg text-pretty underline-offset-4 group-hover:underline text-foreground entry-post-title">{!! $title !!}</h3>
        <p class="text-foreground-muted mt-2 line-clamp-3 text-sm/6 entry-post-excerpt">
            {!! $excerpt !!}
        </p>
    </a>
</article>
