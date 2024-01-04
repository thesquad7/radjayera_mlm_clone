<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials= $request->validate([
                'email' => 'required|email',
                'password' =>'required'
        ]);

        //dd('login berhasil');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginerror','Login Gagal' );
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function loginstd(){
        return view('layout.login.login');
    }
    public function loginadm(){
        return view('layout.login.adminlogin');
    }
    
}
