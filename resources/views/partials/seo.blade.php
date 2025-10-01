{{-- SEO Meta Tags --}}
@if ($page ?? false)
    {{-- Page title --}}
    <title>
        @yield('seo_title')
        {{ $page->seo_title ?: $page->title }}
        {{ $seo->title_separator ?? ' | ' }}
        {{ $seo->site_name ?: config('app.name') }}
    </title>

    {{-- Page description --}}
    @if ($page->seo_description)
        <meta name="description" content="{{ $page->seo_description }}">
    @elseif ($seo->collection_defaults)
        <meta name="description" content="@include('partials.fallback-description')">
    @endif

    {{-- Robots meta --}}
    @if (
        (config('app.env') == 'local' && ! $seo->noindex_local) ||
        (config('app.env') == 'staging' && ! $seo->noindex_staging) ||
        (config('app.env') == 'production' && ! $seo->noindex_production)
    )
        @if ($page->seo_noindex && $page->seo_nofollow)
            <meta name="robots" content="noindex, nofollow">
        @elseif ($page->seo_nofollow)
            <meta name="robots" content="nofollow">
        @elseif ($page->seo_noindex)
            <meta name="robots" content="noindex">
        @endif
    @else
        <meta name="robots" content="noindex, nofollow">
    @endif

    {{-- Canonical URL --}}
    @unless ($page->seo_noindex)
        @if ($page->seo_canonical_type == 'entry' || !$page->seo_canonical_type)
            <link rel="canonical" href="{{ $page->url }}">
        @elseif ($page->seo_canonical_type == 'domain')
            <link rel="canonical" href="{{ $page->seo_canonical_domain }}">
        @elseif ($page->seo_canonical_type == 'external')
            <link rel="canonical" href="{{ $page->seo_canonical_external }}">
        @endif
    @endunless

    {{-- Open Graph --}}
    <meta property="og:site_name" content="{{ $seo->site_name ?: config('app.name') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta property="og:title" content="{{ $page->og_title ?: $page->seo_title ?: $page->title }}">
    <meta property="og:url" content="{{ $page->url }}">
    
    @if ($page->og_description || $page->seo_description)
        <meta property="og:description" content="{{ $page->og_description ?: $page->seo_description }}">
    @elseif ($seo->collection_defaults)
        <meta property="og:description" content="@include('partials.fallback-description')">
    @endif
    
    @if ($og_image = $page->og_image ?: $seo->og_image)
        <meta property="og:image" content="{{ $og_image }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
    @endif

    {{-- Twitter Card --}}
    @if ($twitter_image = $page->twitter_image ?: $seo->twitter_image)
        <meta name="twitter:card" content="summary_large_image">
        @if ($seo->twitter_handle)
            <meta name="twitter:site" content="{{ str_starts_with($seo->twitter_handle, '@') ? $seo->twitter_handle : '@' . $seo->twitter_handle }}">
        @endif
        <meta name="twitter:title" content="{{ $page->og_title ?: $page->seo_title ?: $page->title }}">
        @if ($page->og_description || $page->seo_description)
            <meta name="twitter:description" content="{{ $page->og_description ?: $page->seo_description }}">
        @elseif ($seo->collection_defaults)
            <meta name="twitter:description" content="@include('partials.fallback-description')">
        @endif
        <meta name="twitter:image" content="{{ $twitter_image }}">
    @endif

    {{-- JSON-LD Schema --}}
    @if ($seo->json_ld_type && $seo->json_ld_type !== 'none')
        @php
            $schemaData = null;

            if ($seo->json_ld_type === 'organization') {
                $schemaData = [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => $seo->organization_name,
                    'url' => config('app.url'),
                ];

                if ($seo->organization_logo) {
                    $schemaData['logo'] = $seo->organization_logo;
                }
            } elseif ($seo->json_ld_type === 'person') {
                $schemaData = [
                    '@context' => 'https://schema.org',
                    '@type' => 'Person',
                    'name' => $seo->person_name,
                    'url' => config('app.url'),
                ];
            }
        @endphp

        @if ($seo->json_ld_type === 'custom' && $seo->json_ld)
            <script type="application/ld+json" id="schema">{!! $seo->json_ld !!}</script>
        @elseif ($schemaData)
            <script type="application/ld+json" id="schema-{{ $seo->json_ld_type }}">
                @json($schemaData, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
            </script>
        @endif
    @endif

    {{-- Page specific JSON-LD --}}
    @if ($page->schema_jsonld)
        <script type="application/ld+json" id="schema-page">{!! $page->schema_jsonld !!}</script>
    @endif

    {{-- Breadcrumbs JSON-LD --}}
    @if ($seo->breadcrumbs && method_exists($page, 'parent') && $page->parent())
        @php
            $breadcrumbs = [];
            $current = $page;
            $index = 1;
            
            while ($current) {
                array_unshift($breadcrumbs, [
                    '@type' => 'ListItem',
                    'position' => $index,
                    'name' => $current->title,
                    'item' => $current->url,
                ]);
                $current = method_exists($current, 'parent') ? $current->parent() : null;
                $index++;
            }

            $breadcrumbsSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => $breadcrumbs,
            ];
        @endphp
        <script type="application/ld+json" id="schema-breadcrumbs">@json($breadcrumbsSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)</script>
    @endif

@elseif (isset($response_code) && $response_code !== 200)
    <title>{{ $response_code }} | {{ config('app.name') }}</title>
@else
    <title>{{ config('app.name') }}</title>
@endif

{{-- Google Site Verification --}}
@if ($seo->use_google_site_verification && $seo->google_site_verification)
    <meta name="google-site-verification" content="{{ $seo->google_site_verification }}" />
@endif

{{-- Analytics and Trackers --}}
@if (
    (config('app.env') == 'local' && $seo->trackers_local) ||
    (config('app.env') == 'staging' && $seo->trackers_staging) ||
    (config('app.env') == 'production' && $seo->trackers_production)
)
    @if ($seo->tracker_type == 'gtag' && $seo->google_analytics)
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $seo->google_analytics }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $seo->google_analytics }}'{{ $seo->anonymize_ip ? ", {'anonymize_ip': true}" : '' }});
        </script>
    @elseif ($seo->tracker_type == 'gtm' && $seo->google_tag_manager)
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{{ $seo->google_tag_manager }}');</script>
    @endif

    {{-- Cookie Consent Configuration --}}
    @if ($seo->use_cookie_dialog && $seo->tracker_type !== 'none')
        <script>
            gtag('consent', 'default', {
                'analytics_storage': 'denied',
                'ad_storage': 'denied',
                'ad_user_data': 'denied',
                'ad_personalization': 'denied',
                'wait_for_update': 1500
            });
        </script>
    @endif

    {{-- Fathom Analytics --}}
    @if ($seo->use_fathom && $seo->fathom)
        @if ($seo->fathom_use_custom_domain && $seo->fathom_custom_script_url)
            <script src="{{ $seo->fathom_custom_script_url }}" site="{{ $seo->fathom }}" defer></script>
        @else
            <script src="https://cdn.usefathom.com/script.js" site="{{ $seo->fathom }}" defer></script>
        @endif
    @endif

    {{-- Cloudflare Web Analytics --}}
    @if ($seo->use_cloudflare_web_analytics && $seo->cloudflare_web_analytics)
        <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "{{ $seo->cloudflare_web_analytics }}"}'></script>
    @endif
@endif