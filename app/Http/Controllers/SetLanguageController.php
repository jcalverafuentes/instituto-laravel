<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetLanguageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $locale)
    {
        session()->put('locale', $locale);
        app()-> setLocale($locale);
        return redirect()->back();
    }
}
