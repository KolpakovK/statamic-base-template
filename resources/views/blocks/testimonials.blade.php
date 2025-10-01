<div class="wrapper testimonials-wrapper {{ $block->block_settings->block_classes ?? '' }}">
    <section class="block overflow-hidden testimonials-block" style="{{ $block->block_settings->block_styles ?? '' }}">
        <div class="container py-8 flex flex-col gap-8 overflow-visible testimonials-container {{ $block->block_settings->container_classes ?? '' }}" style="{{ $block->block_settings->container_styles ?? '' }}">
            <div class="flex flex-col gap-12 testimonials-content">
                <div class="flex flex-col gap-4 testimonials-header">
                    @if($block->heading)
                        <h2 class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance testimonials-heading">
                            {!! $block->heading !!}
                        </h2>
                    @endif

                    @if($block->article)
                        <div class="testimonials-description">
                            <x-article :article="$block->article" />
                        </div>
                    @endif

                    @if($block->buttons)
                        <div class="flex flex-wrap gap-4 testimonials-buttons">
                            @foreach($block->buttons as $button)
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

            @if($block->testimonials && count($block->testimonials) > 0)
                <div 
                    class="relative overflow-visible h-fit"
                    x-data="testimonialsSlider({{ count($block->testimonials) }})"
                    @mouseenter="stopAutoPlay()"
                    @mouseleave="startAutoPlay()"
                >
                    {{-- Slider Container --}}
                    <div class="relative overflow-visible h-fit">
                        <div 
                            class="flex duration-500 ease-in-out max-w-[560px] testimonial-slide-container"
                            :style="`transform: translateX(-${currentSlide * 100}%)`"
                        >
                            @foreach($block->testimonials as $index => $testimonial)
                                <div class="slider-slide max-w-[560px] testimonial-slide-holder">
                                    <div class="p-6 w-full bg-card relative testimonial-slide border-border border rounded-panel-sm min-h-[200px] flex flex-col justify-between">
                                        {{-- Quote Icon --}}
                                        <div class="quote-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                            </svg>
                                        </div>
                                        
                                        {{-- Quote Content --}}
                                        @if($testimonial->article)
                                            <div class="mb-6">
                                                <x-article :article="$testimonial->article" />
                                            </div>
                                        @endif
                                        
                                        {{-- Author Info --}}
                                        <div class="flex items-center gap-4 testimonial-author-info">
                                            {{-- @if($testimonial->avatar)
                                                <div class="author-avatar">
                                                    <x-picture 
                                                        :asset="$testimonial->avatar" 
                                                        :alt="$testimonial->author . ' avatar'"
                                                        class="w-full h-full object-cover"
                                                    />
                                                </div>
                                            @endif --}}
                                            
                                            <div class="flex flex-col gap-1">
                                                <div class="text-base font-semibold text-foreground testimonial-author-name">
                                                    {{ $testimonial->author }}
                                                </div>
                                                @if($testimonial->position)
                                                    <div class="text-sm text-foreground-secondary testimonial-author-position">
                                                        {{ $testimonial->position }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Navigation Controls --}}
                    @if(count($block->testimonials) > 1)
                        {{-- Previous/Next Buttons --}}
                        <button 
                            @click="prevSlide()"
                            class="slider-nav-btn slider-nav-btn--prev"
                            aria-label="Previous testimonial"
                        >
                            <i class="ti ti-chevron-left"></i>
                        </button>
                        
                        <button 
                            @click="nextSlide()"
                            class="slider-nav-btn slider-nav-btn--next"
                            aria-label="Next testimonial"
                        >
                            <i class="ti ti-chevron-right"></i>
                        </button>

                        {{-- Dots Indicator --}}
                        <div class="slider-dots">
                            @foreach($block->testimonials as $index => $testimonial)
                                <button 
                                    @click="goToSlide({{ $index }})"
                                    class="slider-dot"
                                    :class="currentSlide === {{ $index }} ? 'slider-dot--active' : 'slider-dot--inactive'"
                                    aria-label="Go to testimonial {{ $index + 1 }}"
                                ></button>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
</div>

{{-- SCRIPT --}}
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('testimonialsSlider', (totalSlides) => ({
        currentSlide: 0,
        totalSlides: totalSlides,
        autoPlay: true,
        interval: null,
        
        init() {
            this.startAutoPlay();
        },
        
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        },
        
        prevSlide() {
            this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
        },
        
        goToSlide(index) {
            this.currentSlide = index;
        },
        
        startAutoPlay() {
            if (this.autoPlay && this.totalSlides > 1) {
                this.interval = setInterval(() => {
                    this.nextSlide();
                }, 5000);
            }
        },
        
        stopAutoPlay() {
            if (this.interval) {
                clearInterval(this.interval);
                this.interval = null;
            }
        },
    }));
});
</script>

{{-- STYLES --}}
<style>
@layer components {

    /* .testimonials-block .author-avatar {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        overflow: hidden;
        flex-shrink: 0;
        border: 2px solid var(--border);
    } */

    
}
</style>