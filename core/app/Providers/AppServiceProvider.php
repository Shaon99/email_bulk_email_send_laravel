<?php

namespace App\Providers;


use App\Models\GeneralSetting;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $general = GeneralSetting::first();

        view()->share('general', $general);


    }

    function removeSpecialChar($str)
    {

        $res = trim(str_replace(array(
            '[', ']',
            '\''
        ), '', $str));
        return $res;
    }
}
