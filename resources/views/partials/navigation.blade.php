<nav class="bg-background border-b border-border sticky top-0 left-0 w-full">
    <div class="container mx-auto items-center justify-between min-h-12 gap-4 px-3 hidden md:flex">
        <div class="logo flex items-center gap-4">
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

        <div class="flex gap-8 items-center">
            @if($misc->navigation_type == "main")
                @include('partials.nav-links')
            @endif

            @if($misc->buttons)
                <div class="flex items-center gap-2">
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

    <div class="flex md:hidden container mx-auto items-center justify-between min-h-12 gap-4 px-3">
        <div class="logo flex items-center gap-4">
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

        <x-button 
            icon="ti-menu-deep" 
            variant="ghost"
            show_icon="true"
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden'); document.body.classList.toggle('overflow-hidden');"
        />
    </div>
</nav>

<div class="flex hidden fixed top-0 left-0 w-full h-screen overflow-auto bg-background" id="mobile-menu">
    <div class="container mx-auto items-center flex flex-col px-3">
        <div class="flex items-center justify-between min-h-12 gap-4 w-full">
            <div class="logo flex items-center gap-4">
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

            <x-button 
                icon="ti-x" 
                variant="ghost"
                show_icon="true"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden');  document.body.classList.toggle('overflow-hidden');"
            />
        </div>

        @include('partials.nav-mobile-links')

        @if($misc->buttons)
            <div class="flex items-center gap-2 mt-8">
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