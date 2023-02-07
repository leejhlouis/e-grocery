<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LocaleController extends Controller
{
    public function switchLocale(Request $request, $locale){
        if (in_array($locale, ['en', 'id'])){
            app()->setLocale($locale);

            $previousPath = parse_url(URL::previous(), PHP_URL_PATH);
            $newUrl = preg_replace('~^(/[a-z]{2})~', "/$locale", $previousPath, 1);

            return redirect()->to($newUrl);
        }

        return redirect()->back();
    }
}
