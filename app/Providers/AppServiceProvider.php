<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use App\About;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*', function ($view) {
            $abouts = About::select('id','page')->where('status',1)->orderBy('position', 'asc')->get();
            $view->with(['abouts' => $abouts]);
        });

        Schema::defaultStringLength(191); //NEW: Increase StringLength
        require_once __DIR__ . '/../Helpers/Helpers.php';
    }
}
