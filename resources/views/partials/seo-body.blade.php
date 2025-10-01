{{-- Body scripts for analytics --}}
@if (
    (config('app.env') == 'local' && $seo->trackers_local) ||
    (config('app.env') == 'staging' && $seo->trackers_staging) ||
    (config('app.env') == 'production' && $seo->trackers_production)
)
    {{-- Google Tag Manager (noscript) --}}
    @if ($seo->tracker_type == 'gtm' && $seo->google_tag_manager)
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id={{ $seo->google_tag_manager }}" 
                    height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
    @endif

    {{-- Cookie Dialog --}}
    @if ($seo->use_cookie_dialog)
        @include('partials.cookie-dialog')
    @endif
@endif