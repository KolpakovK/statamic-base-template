<?php

namespace App\Widgets;

use Statamic\Widgets\Widget;

class TechnicalSupport extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        return view('widgets.technical-support', [
            'api_url' => config('app.website_api_url', env('WEBSITE_API_URL')),
            'app_id' => config('app.website_app_id', env('WEBSITE_APP_ID')),
        ]);
    }
}