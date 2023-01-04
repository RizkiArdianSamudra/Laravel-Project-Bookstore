@extends('user.user_layouts.master')

@section('title', 'user/buku')

@section('content')

    <div class="min-h-screen px-32 py-14">
        <div>
            <div class="m-auto px-4 py-2 w-fit border-2 border-[#27ae60]/100 shadow-lg rounded-md">
                <h1 class="font-bold text-3xl text-[#219150]">Daftar Buku Yang Dijual</h1>
            </div>
            <div class="mt-12 m-auto w-fit grid grid-cols-4 gap-x-5 gap-y-10">
                @foreach ($buku as $item)   
                    <div class="py-5 px-16 w-fit border-2 border-black/20 rounded-xl shadow-md shadow-[#27ae60]/80">
                        <div>
                            <img src="{{ asset("images/$item->gambar") }}" class="h-[15rem]">
                        </div>
                        <div class="mt-5">
                            <p class="font-bold text-xl text-center">{{ $item->nama_buku }}</p>
                            <p class="mt-2 font-medium text-xl text-center">Rp. {{ $item->harga_buku }}</p>
                            <div class="mt-4 m-auto w-fit">
                                <button class="bg-[#27ae60] py-2 px-8 rounded-lg text-white">Beli Buku</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection