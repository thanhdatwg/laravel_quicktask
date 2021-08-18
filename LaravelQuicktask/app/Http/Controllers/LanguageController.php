<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index($language)
    {
        if ($language) {
            Session()->put('language', $language);
        }
        return redirect()->back();
    }
}
