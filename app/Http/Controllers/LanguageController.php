<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    /**
     * @param Request $request
     */
    public function setLanguage(Request $request)
    {
        $language = $request->input('language');
    
        Cookie::queue('language', $language, 60 * 24 * 365);

        App::setLocale($language);

        return redirect()->back();
    }
}
