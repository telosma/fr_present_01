<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LangController extends Controller
{
    public function postLang(Request $request)
    {
        Session::set('locale', $request->locale);
        return redirect()->back();
    }
}
