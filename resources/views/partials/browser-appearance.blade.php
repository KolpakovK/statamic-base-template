{{-- Browser Appearance Meta Tags --}}

{{-- Format Detection --}}
@if ($browser_appearance->disable_phone_detection)
    <meta name="format-detection" content="telephone=no" />
@endif

@if ($browser_appearance->disable_email_detection)
    <meta name="format-detection" content="email=no" />
@endif

@if ($browser_appearance->disable_address_detection)
    <meta name="format-detection" content="address=no" />
@endif

{{-- Apple Mobile Web App --}}
@if ($browser_appearance->apple_mobile_web_app)
    <meta name="apple-mobile-web-app-capable" content="yes" />
    @if ($browser_appearance->apple_status_bar_black)
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    @endif
@endif

{{-- Android Mobile Web App --}}
@if ($browser_appearance->android_mobile_web_app)
    <meta name="mobile-web-app-capable" content="yes" />
@endif

{{-- Theme Color --}}
@if ($browser_appearance->theme_color)
    <meta name="theme-color" content="{{ $browser_appearance->theme_color }}" />
@endif

{{-- Favicons --}}
{{-- 
    Генерируйте favicon здесь: https://realfavicongenerator.net
    Поместите файлы в public/favicon/
--}}
<link rel="icon" type="image/png" href="{{ $brand->favicon_96x96 }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ $brand->favicon_svg }}" />
<link rel="shortcut icon" href="{{ $brand->favicon_ico }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ $brand->apple_touch_icon }}" />
<meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}" />
<link rel="manifest" href="{{ $brand->manifest }}" />