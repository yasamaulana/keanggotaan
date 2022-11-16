<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth()->user()->role == 'guest') {
                $message = "Masukan Email dan Password dengan benar";
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/dashboard-admin');
            }
        }

        return back()->with([
            'eror' => 'Login gagal! Masukan Email dan Password yang benar',
        ]);
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}