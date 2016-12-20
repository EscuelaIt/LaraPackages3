<?php

namespace App\Lib;

class Functions
{

    public static function parseLang()
    {

        $locale = \Request::segment(1);
        if (in_array($locale, config('app.supported-locales'))) {
            $lang = $locale;
        } else {
            $lang = config('app.locale');
        }
        return $lang;

    }

    public static function currentUrl($lang = "")
    {
        $locale = \Request::segment(1);
        if (in_array($locale, config('app.supported-locales'))) {
                $cleanPath = substr(\Request::path(), 2);
                $translated = str_replace(\Request::path(), $lang . $cleanPath, \Request::url());
        }else{
                $translated = str_replace(\Request::path(), $lang .'/'.\Request::path(), \Request::url());
        } 

        return $translated;
    }

}
