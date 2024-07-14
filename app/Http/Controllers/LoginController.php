<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // if (auth()->user()->is_admin) {
            //     return redirect()->route('dashboard');
            // }

            // return redirect()->route('beranda');

            if (auth()->user()->is_admin) {
                return redirect()->intended('dashboard');
            }else {
                return redirect()->intended('beranda');
            }
        }

        return back()->withErrors(['email' => 'Login gagal, periksa kembali!']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
