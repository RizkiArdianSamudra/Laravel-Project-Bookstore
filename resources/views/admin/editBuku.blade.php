@extends('admin.admin_layouts.master')

@section('title', 'admin/edit-buku')

@section('content')

    <div class="p-20 min-h-screen">
        <div class="p-5 m-auto w-[50rem] shadow-lg border-2 border-black/10 rounded-2xl">
            <div>
                <h1 class="text-2xl text-center font-bold uppercase">Edit Buku</h1>
            </div>
            <div>
                <form action="/admin/update-buku/{{ $buku->id_buku }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mt-5 grid grid-cols-2 gap-x-8 gap-y-4">
                        <div>
                            <p class="font-medium">Nama Buku</p>
                            <input type="text" name="nama_buku" placeholder="masukkan nama buku" value="{{ $buku->nama_buku }}" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                            {{-- pesan error  --}}
                            @error('nama_buku')
                                <p class="text-red-800">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <p class="font-medium">Stok</p>
                            <input type="number" name="stok_buku" placeholder="masukkan stok" min="1" value="{{ $buku->stok_buku }}" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                            {{-- pesan error  --}}
                            @error('stok_buku')
                                <p class="text-red-800">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <p class="font-medium">Pengarang</p>
                            <input type="text" name="pengarang" placeholder="masukkan pengarang" value="{{ $buku->pengarang }}" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                            {{-- pesan error  --}}
                            @error('pengarang')
                                <p class="text-red-800">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <p class="font-medium">Penerbit</p>
                            <input type="text" name="penerbit" placeholder="masukkan penerbit" value="{{ $buku->penerbit }}" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                            {{-- pesan error  --}}
                            @error('penerbit')
                                <p class="text-red-800">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <p class="font-medium">Harga</p>
                            <input type="number" name="harga_buku" placeholder="masukkan harga" min="1" value="{{ $buku->harga_buku }}" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 rounded-lg">
                            {{-- pesan error  --}}
                            @error('harga_buku')
                                <p class="text-red-800">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <p class="font-medium">Gambar</p>
                            <input type="file" name="gambar" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-11 w-full pl-3 pt-1 rounded-lg">
                            <input type="hidden" name="gambarLama" value="{{ $buku->gambar }}">
                        </div>
                    </div>

                    <div class="mt-5">
                        <p class="font-medium">Masukkan Deskripsi</p>
                        <textarea name="deskripsi" placeholder="masukkan deskripsi buku" class="focus:outline-0 mt-2 border-2 border-[#27ae60]/50 h-32 w-full pl-3 pt-2 rounded-lg">{{ $buku->deskripsi }}</textarea>
                        {{-- pesan error  --}}
                        @error('deskripsi')
                            <p class="text-red-800">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-8 h-11 w-full rounded-lg bg-[#27ae60] font-medium text-white flex justify-center items-center">
                        <button type="submit" name="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection