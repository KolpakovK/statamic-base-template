<nav class="main-navigation bg-background border-b border-border sticky top-0 left-0 w-full" role="navigation" aria-label="Main navigation">
    <div class="nav-container container mx-auto items-center justify-between min-h-12 gap-4 px-3 hidden md:flex">
        <div class="nav-brand logo flex items-center gap-4">
            @if($brand->logo)
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img 
                        src="{{ $brand->logo['url'] ?? $brand->logo }}" 
                        alt="{{ $brand->name ?? 'Logo' }}" 
                        class="h-8 w-auto inline-block dark:hidden"
                        loading="lazy"
                    >

                    @if($brand->logo_dark)
                        <img 
                            src="{{ $brand->logo_dark['url'] ?? $brand->logo_dark }}" 
                            alt="{{ $brand->name ?? 'Logo' }}" 
                            class="h-8 w-auto hidden dark:inline-block"
                            loading="lazy"
                        >
                    @endif
                </a>
            @endif

            @if($misc->navigation_type == "left")
                @include('partials.nav-links')
            @endif
        </div>

        @if($misc->navigation_type == "center")
            @include('partials.nav-links')
        @endif

        <div class="nav-actions flex gap-8 items-center">
            @if($misc->navigation_type == "main")
                @include('partials.nav-links')
            @endif

            @if($misc->buttons)
                <div class="nav-buttons flex items-center gap-2" role="group" aria-label="Navigation actions">
                    @foreach($misc->buttons as $button)
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

    <div class="nav-mobile-container flex md:hidden container mx-auto items-center justify-between min-h-12 gap-4 px-3">
        <div class="nav-mobile-brand logo flex items-center gap-4">
            @if($brand->logo)
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img 
                        src="{{ $brand->logo['url'] ?? $brand->logo }}" 
                        alt="{{ $brand->name ?? 'Logo' }}" 
                        class="h-8 w-auto inline-block dark:hidden"
                        loading="lazy"
                    >

                    @if($brand->logo_dark)
                        <img 
                            src="{{ $brand->logo_dark['url'] ?? $brand->logo_dark }}" 
                            alt="{{ $brand->name ?? 'Logo' }}" 
                            class="h-8 w-auto hidden dark:inline-block"
                            loading="lazy"
                        >
                    @endif
                </a>
            @endif
        </div>

        <div class="nav-mobile-toggle" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
            <x-button 
                icon="ti-menu-deep" 
                variant="ghost"
                show_icon="true"
                onclick="const menu = document.getElementById('mobile-menu'); menu.classList.toggle('hidden'); menu.classList.toggle('flex'); document.body.classList.toggle('overflow-hidden');"
            />
        </div>
    </div>
</nav>

<div class="mobile-menu hidden fixed top-0 left-0 w-full h-screen overflow-auto bg-background" id="mobile-menu" role="dialog" aria-labelledby="mobile-menu-title" aria-modal="true">
    <div class="mobile-menu-container container mx-auto items-center flex flex-col px-3">
        <div class="mobile-menu-header flex items-center justify-between min-h-12 gap-4 w-full">
            <div class="mobile-menu-brand logo flex items-center gap-4">
                @if($brand->logo)
                    <a href="{{ url('/') }}" class="flex items-center gap-2">
                        <img 
                            src="{{ $brand->logo['url'] ?? $brand->logo }}" 
                            alt="{{ $brand->name ?? 'Logo' }}" 
                            class="h-8 w-auto inline-block dark:hidden"
                            loading="lazy"
                        >

                        @if($brand->logo_dark)
                            <img 
                                src="{{ $brand->logo_dark['url'] ?? $brand->logo_dark }}" 
                                alt="{{ $brand->name ?? 'Logo' }}" 
                                class="h-8 w-auto hidden dark:inline-block"
                                loading="lazy"
                            >
                        @endif
                    </a>
                @endif
            </div>

            <div class="mobile-menu-close" aria-label="Close mobile menu">
                <x-button 
                    icon="ti-x" 
                    variant="ghost"
                    show_icon="true"
                    onclick="const menu = document.getElementById('mobile-menu'); menu.classList.toggle('hidden'); menu.classList.toggle('flex'); document.body.classList.toggle('overflow-hidden');"
                />
            </div>
        </div>

        @include('partials.nav-mobile-links')

        @if($misc->buttons)
            <div class="mobile-menu-buttons flex items-center gap-2 mt-8" role="group" aria-label="Mobile navigation actions">
                @foreach($misc->buttons as $button)
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