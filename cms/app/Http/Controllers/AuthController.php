<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
    	return view('auth.login');
    }

    public function login(Request $request)
    {
    	$credentials	= $request->only('email', 'password');
    	$check			= Auth::attempt($credentials);

    	if ($check) {
    		return redirect()->intended('/users');
    	} else {
    		return redirect()->back();
    	}
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
