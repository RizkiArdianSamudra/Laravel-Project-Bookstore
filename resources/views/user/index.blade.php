@extends('user.user_layouts.master')

@section('title', 'user/homepage')

@section('content')

    <div class="min-h-screen">
        <div class="grid grid-cols-2 gap-10 px-32 h-[65vh] bg-[url('images/banner-bg.jpg')]">
            <div class="flex items-center">
                <div>
                    <h1 class="text-5xl font-bold">Selamat Datang <span class="text-[#27ae60] underline">{{ auth()->user()->nama }}</span>,</h1>
                    <h1 class="mt-5 text-5xl font-bold">Silahkan Berbelanja</h1>
                </div>
            </div>
            <div class="flex items-end">
                <div>
                    <div class="flex justify-center">
                        <img src="{{ url('images/book-4.png') }}" class="w-48">
                        <img src="{{ url('images/book-5.png') }}" class="w-48">
                        <img src="{{ url('images/book-6.png') }}" class="w-48">
                    </div>
                    <div>
                        <img src="{{ url('images/stand.png') }}" class="w-full">
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-14 px-32 py-20 h-[35vh] shadow-lg rounded-b-[100px]">
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-truck w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="7" cy="17" r="2"></circle><circle cx="17" cy="17" r="2"></circle><path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">Gratis Ongkir</h1>
                    <p class="mt-2 text-sm">Pembelian Lebih Dari 500K</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-lock w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="5" y="11" width="14" height="10" rx="2"></rect><circle cx="12" cy="16" r="1"></circle><path d="M8 11v-4a4 4 0 0 1 8 0v4"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">Pembayaran Aman</h1>
                    <p class="mt-2 text-sm">100% Pembayaran Aman</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-reload w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.933 13.041a8 8 0 1 1 -9.925 -8.788c3.899 -1.002 7.935 1.007 9.425 4.747"></path><path d="M20 4v5h-5"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">Pengembalian Mudah</h1>
                    <p class="mt-2 text-sm">Pengembalian 7 Hari</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-messages w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">24/7 Bantuan</h1>
                    <p class="mt-2 text-sm">Hubungi Kami Kapan Saja</p>
                </div>
            </div>
        </div>
    </div>

@endsection