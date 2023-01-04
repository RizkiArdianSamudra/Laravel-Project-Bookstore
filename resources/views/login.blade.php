@extends('layouts.master')

@section('title', 'login')

@section('content')

    <div class="p-20 min-h-screen">

        <div class="text-lg text-center font-bold capitalize mb-10 text-red-800">
            @if (session()->has('notvalid'))
                {{ session('notvalid') }}
            @endif
        </div>

        <div class="p-5 m-auto w-[25rem] shadow-lg border-2 border-black/10 rounded-2xl">
            <div>
                <h1 class="text-2xl text-center font-bold uppercase">Sign In</h1>
            </div>
            <div>
                <form action="/login" method="POST">
                    @csrf

                    <div class="mt-5">
                        <p class="font-medium">Email</p>
                        <input type="email" name="email" placeholder="masukkan email" value="{{ Session::get('email') }}" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                        @error('email')
                            <p class="text-red-800">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <p class="font-medium">Password</p>
                        <input type="password" name="password" placeholder="masukkan password" value="{{ Session::get('password') }}" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                        @error('password')
                            <p class="text-red-800">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-8 h-11 w-full rounded-lg bg-[#27ae60] font-medium text-white flex justify-center items-center">
                        <button type="submit" name="submit">Sign In</button>
                    </div>
                </form>
            </div>
            <div class="flex mt-5">
                <p>Belum Punya Akun?</p>
                <a href="/register" class="ml-2 underline text-[#27ae60]">Register</a>
            </div>
        </div>
    </div>

@endsection