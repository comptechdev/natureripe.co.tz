<?php

namespace App\Providers;

use App\View\Components\UI\Buttons\Elevated;
use App\View\Components\UI\Core\Button;
use App\View\Components\UI\Core\Input;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Blade::component("ui.core.button", Button::class);
        Blade::component("ui.buttons.elevated", Elevated::class);
        Blade::component("ui.core.input", Input::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
