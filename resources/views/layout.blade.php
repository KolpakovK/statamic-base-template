<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- SEO Meta Tags --}}
        @include('partials.seo')
        
        {{-- Browser Appearance --}}
        @include('partials.browser-appearance')
        
        {{-- Vite Assets --}}
        @vite(['resources/js/site.js', 'resources/css/site.css'])
        
        {{-- Dynamic Theme Variables --}}
        @include('partials.theme-variables')

        <style>
            {!! $theme->custom_css_theme !!}
        </style>

        {{-- Header Scripts --}}

        {!! $scripts->header_scripts !!}
    </head>
    <body class="bg-background text-foreground font-sans leading-normal antialiased relative">
        {{-- SEO Body Scripts --}}
        @include('partials.seo-body')

        @include('partials.navigation')

        {{-- Main Content --}}
        @yield('content')

        @include('partials.footer')

        {!! $scripts->footer_scripts !!}

        @if($misc->modals)
            @foreach($misc->modals as $modal)
                <x-modal 
                    :modal_id="$modal['modal_id']" 
                    :blocks="$modal['modal_blocks'] ?? null" 
                />
            @endforeach
        @endif

        @vite(['resources/js/alpine.min.js'])
    </body>
</html>
