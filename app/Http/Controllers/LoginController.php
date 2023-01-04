<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function autentikasi(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $validasi = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'email wajib diisi',
                'password.required' => 'password wajib diisi'
            ]
        );

        if (Auth::attempt($validasi)) {
            //jika autentikasi berhasil
            $request->session()->regenerate();

            if (auth()->user()->level === 'admin') {
                return redirect()->intended('/admin');
            } elseif (auth()->user()->level === 'user') {
                return redirect()->intended('/user');
            } else {
                return redirect()->intended('/');
            }
        } else {
            //jika autentikasi gagal
            return redirect('/login')->with('notvalid', 'email dan password yang dimasukkan tidak valid');
        }
    }
}
