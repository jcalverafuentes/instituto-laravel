<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetLanguageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        session() ->put('locale', $locale);
        app()-> setLocale($locale);
        //app()-> setFallbackLocale(); //esto es para poner un idioma predeterminado si no coge el primero
    }
}
