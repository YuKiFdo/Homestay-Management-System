<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang( $lang )
    {
        if ( ! array_key_exists( $lang, Config::get('languages') ) ) {
            return Redirect::back();
        }

        $url             = url()->previous();
        $base_url        = URL::to('/');
        $base_url_rx     = str_replace( '/', '[\/]', $base_url . '/' );
        $match_pattern   = '/' . $base_url_rx . '\w{2}/';
        $replace         = $base_url . '/' . $lang;
        $translation_url = preg_replace( $match_pattern, $replace, $url );

        return Redirect::to( $translation_url );
    }
}
