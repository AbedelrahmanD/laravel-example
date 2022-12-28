<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Js;
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
        $laguages = [
            "en" => "ltr",
            "ar" => "rtl",
        ];

        $lang = request()->lang;


        if (!isset($laguages[$lang])) {
            $lang = array_key_first($laguages);
        }
        $dirc = $laguages[$lang];
        
       $otherLang= array_filter($laguages, function ($dirc,$language) use($lang) {
            return $language != $lang;
        },ARRAY_FILTER_USE_BOTH);
        $otherLang=array_key_first($otherLang);
       
        App::setLocale($lang);
        Config::set("lang", $lang);
        Config::set("otherLang", $otherLang);
        Config::set("dirc", $dirc);
        echo "
       <script>
        window.lang='$lang';
        window.otherLang='$otherLang';
       </script>
          ";
    }
}
