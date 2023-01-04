@extends('admin.admin_layouts.master')

@section('title', 'admin/daftar-user')

@section('content')

    <div class="px-32 py-10 min-h-screen">
        <div class="flex min-h-[36rem] rounded-3xl border-2 border-[#27ae60]/50 shadow-lg">
            <div class="w-1/4 px-10 py-6 border-r-2 border-[#27ae60]/50 rounded-3xl">
                <div class="flex items-center bg-[#219150] px-4 py-2 text-white rounded">
                    <div>
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg>
                    </div>
                    <div>
                        <a href="{{ route('admin.daftar.buku') }}" class="navLink2{{ Request::is('admin/daftar-buku') ? ' aktif' : '' }} pl-2 font-bold text-xl">Daftar Buku</a>
                    </div>
                </div>
                <div class="mt-[2px] flex items-center bg-[#219150] px-4 py-2 text-white rounded">
                    <div>
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg>
                    </div>
                    <div>
                        <a href="{{ route('admin.daftar.user') }}" class="navLink2{{ Request::is('admin/daftar-user') ? ' aktif' : '' }} pl-2 font-bold text-xl">Daftar User</a>
                    </div>
                </div>
            </div>
            <div class="w-3/4 px-10 py-6">
                <div>
                    <h1 class="font-bold text-2xl">Daftar User</h1>
                </div>
                <div class="mt-5 grid grid-cols-5 gap-[2px]">
                    <p class="px-4 py-2 font-medium bg-[#27ae60]/50 rounded-tl-lg">Nama</p>
                    <p class="px-4 py-2 font-medium bg-[#27ae60]/50">Status</p>
                    <p class="px-4 py-2 font-medium bg-[#27ae60]/50">Email</p>
                    <p class="px-4 py-2 font-medium bg-[#27ae60]/50">Jenis Kelamin</p>
                    <p class="px-4 py-2 font-medium bg-[#27ae60]/50 rounded-tr-lg">Tanggal Lahir</p>
                </div>

                @foreach ($user as $item)
                    <div class="grid grid-cols-5 gap-[2px] h-11">
                        <p class="px-4 py-2 border-b-[1px] border-black/50">{{ $item->nama }}</p>
                        <p class="px-4 py-2 border-b-[1px] border-black/50">{{ $item->level }}</p>
                        <p class="px-4 py-2 border-b-[1px] border-black/50">{{ $item->email }}</p>
                        <p class="px-4 py-2 border-b-[1px] border-black/50">{{ $item->jenis_kelamin }}</p>
                        <p class="px-4 py-2 border-b-[1px] border-black/50">{{ $item->tgl_lahir }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection