<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App;
use Lang;

class AuthUserController extends Controller
{
    public function postSignin(Request $request)
    {
        $loginSuccess = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($loginSuccess) {
            Session::set('locale', Auth::user()->lang);

            return redirect('/home');
        }

        return redirect()->back();
    }
}
