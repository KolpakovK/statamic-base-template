<div class="wrapper marquee-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block bg-background marquee-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container marquee-container flex flex-col gap-12 py-8 {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            @if($block->text)
                <h2 class="text-base font-medium text-foreground-secondary text-balance marquee-text">
                    {!! $block->text !!}
                </h2>
            @endif
            
            <div
                x-data
                x-init="
                        $nextTick(() => {
                            const content = $refs.content;
                            const item = $refs.item;
                            const clone = item.cloneNode(true);
                            content.appendChild(clone);
                        });
                "
                class="relative w-full"
                >
                <div class="relative w-full mx-auto overflow-hidden max-w-7xl">
                    <div class="absolute left-0 z-20 w-40 h-full bg-gradient-to-r from-background to-transparent marquee-left-gradient"></div>
                    <div class="absolute right-0 z-20 w-40 h-full bg-gradient-to-l from-background to-transparent marquee-right-gradient"></div>
                    <div x-ref="content" class="flex animate-marquee">
                        <div x-ref="item" class="flex items-center justify-around flex-shrink-0 w-full space-x-2 marquee-inner">
                            @if($block->logos && count($block->logos) > 0)
                                @foreach($block->logos as $logo)
                                    <img src="{{ $logo->url }}" alt="{{ $logo->alt }}" class="h-12 w-12 object-contain marquee-item"/>
                                @endforeach
                            @endif       
                        </div>
                    </div>
                </div>
            </div>
            <style>
                /*
                *  This is the marquee animation styles. 
                *  Instead of adding this CSS you may wish to implement in your tailwind config. 
                *  Learn more in the marquee Tailwind Config section
                */
                @keyframes marquee {
                    0% {
                        transform: translateX(0);
                    }
                    100% {
                        transform: translateX(-100%);
                    }
                }
                .animate-marquee {
                    animation: marquee 20s linear infinite;
                }
            </style>
        </div>
    </section>
</div>