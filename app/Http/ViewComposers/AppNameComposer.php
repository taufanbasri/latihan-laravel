<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class AppNameComposer{
    public function compose(View $view)
    {
        $view->with('app_name', 'Quote App v2.4');
    }
}