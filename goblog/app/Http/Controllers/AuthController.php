<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function form()
    {
    	return view('login');
    }

    public function login(Request $request)
    {
    	$credential    = $request->only('email', 'password');
    	$check         = Auth::attempt($credential);
    	if ($check) {
    		return redirect()->intended('/users');
    	} else {
    		return 'Login Gagal';
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/form');
    }
}
