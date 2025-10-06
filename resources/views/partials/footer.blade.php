<nav class="footer-nav w-full border-t border-border bg-background">
    <div class="container mx-auto py-6 px-2 grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="flex flex-col gap-8">
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

            @if($misc->caption)
                <p class="text-base text-foreground-secondary w-full lg:w-1/2">
                    {!! $misc->caption !!}
                </p>
            @endif
        </div>

        <div class="col-span-1 lg:col-span-2 flex gap-8 lg:justify-end items-start">
            <statamic:nav:footer_navigation>
                <div class="flex flex-col gap-4 lg:justify-end">
                    <x-button 
                        :label="$title" 
                        :link="$url" 
                        :variant="'link'" 
                        :show_icon="false"
                        class="justify-start lg:justify-end"
                    />

                    @if($children)
                        <div class="flex flex-col gap-2 lg:justify-end">
                            @foreach($children as $child)
                                <x-button 
                                    :label="$child['title']" 
                                    :link="$child['url']" 
                                    :variant="'link'" 
                                    :show_icon="false"
                                    class="justify-start lg:justify-end"
                                />
                            @endforeach
                        </div>
                    @endif
                </div>
            </statamic:nav:footer_navigation>
        </div>
    </div>

    <div class="container mx-auto py-6 px-2 flex items-center justify-start lg:justify-end gap-8 border-t border-border">
        @if($misc->footer_details)
            <p class="text-base text-foreground-secondary">
                {!! $misc->footer_details !!}
            </p>
        @endif

        @if($misc->footer_buttons)
            <div class="flex flex-wrap gap-4">
                @foreach($misc->footer_buttons as $button)
                    <x-button 
                        :label="$button->label" 
                        :link="$button->link" 
                        :variant="$button->variant" 
                        :show_icon="$button->show_icon"
                        :icon="$button->icon ?? null"
                        :special_action="$button->special_action"
                        :special_action_type="$button->special_action_type"
                        :custom_action="$button->custom_action ?? null"
                    />
                @endforeach
            </div>
        @endif
    </div>
</nav>