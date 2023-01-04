@extends('layouts.master')

@section('title', 'register')

@section('content')

    <div class="p-20 min-h-screen">
        <div class="p-5 m-auto w-[25rem] shadow-lg border-2 border-black/10 rounded-2xl">
            <div>
                <h1 class="text-2xl text-center font-bold uppercase">Register</h1>
            </div>
            <div>
                <form action="/register" method="POST">
                    @csrf
                    <div class="mt-5">
                        <p class="font-medium">Nama Lengkap</p>
                        <input type="text" name="nama" placeholder="masukkan nama" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                        @error('nama')
                            <p class="text-red-800">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <p class="font-medium">Email</p>
                        <input type="email" name="email" placeholder="masukkan email" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                        @error('email')
                            <p class="text-red-800">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <p class="font-medium">Password</p>
                        <input type="password" name="password" placeholder="masukkan password" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                        @error('password')
                            <p class="text-red-800">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-5 grid grid-cols-2 gap-10">
                        <div>
                            <p class="font-medium">Jenis Kelamin</p>
                            <select name="jenis_kelamin" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                                <option value="" selected disabled>Pilih</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <p class="text-red-800">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <p class="font-medium">Tanggal Lahir</p>
                            <input type="date" name="tgl_lahir" placeholder="masukkan tgl_lahir" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                            @error('tgl_lahir')
                                <p class="text-red-800">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-8 h-11 w-full rounded-lg bg-[#27ae60] font-medium text-white flex justify-center items-center">
                        <button type="submit" name="submit">Register</button>
                    </div>
                </form>
            </div>
            <div class="flex mt-5">
                <p>Sudah Punya Akun?</p>
                <a href="/login" class="ml-2 underline text-[#27ae60]">Login</a>
            </div>
        </div>
    </div>

@endsection