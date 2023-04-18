<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    public function switch($locale)
    {

        Session::put('locale', $locale);
        App::setLocale(Session::get('locale'));
        Session::put('previousUrl', URL::previous());

        return redirect(Session::get('previousUrl'));
    }
}
