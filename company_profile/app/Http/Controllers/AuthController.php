<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticated(Request $request) // kita taro request untuk menerima inputan yg tuliskan oleh user
    {
        $request->validate([ // membuat req validate
            'email' => 'required|email', // email harus diisi dan harus email @
            'password' => 'required' // password harus diisi asal disii
        ]);

        $credentials = $request->only('email','password'); // akan merequest hanya boleh diisi email dan password

        if(Auth::attempt($credentials)){ // jika benear isiinya maka akan diizinkan akses ke dashboard tapi jika salah
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([  // jika salah maka akan di dibawa kembali ke login awal lalu diberikan text login errpr
            'loginError' => 'Email atau Password salah'
            // loginErrror nanti akan ngelink ke login.blade.php
        ]);

    }
    
    public function logout()
    {
        Auth::logout();

        return redirect('/login'); // jika dia logout makan akan di alihkan kembali ke form /login
    }
}
