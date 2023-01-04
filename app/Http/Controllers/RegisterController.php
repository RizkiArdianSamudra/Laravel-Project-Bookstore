<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function actionRegister(Request $request)
    {
        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $user = $request->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'password' => 'required',
                'jenis_kelamin' => 'required',
                'tgl_lahir' => 'required',
            ],
            [
                'nama.required' => 'nama wajib diisi',
                'email.required' => 'email wajib diisi',
                'password.required' => 'password wajib diisi',
                'jenis_kelamin.required' => '*wajib diisi',
                'tgl_lahir.required' => '*wajib diisi',
            ]
        );
        $user['password'] = bcrypt($user['password']);

        User::create($user);
        return redirect()->route('login');
    }
}
