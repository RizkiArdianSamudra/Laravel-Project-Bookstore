<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function daftarBuku()
    {
        $buku = Buku::all();
        return view('admin.daftarBuku', compact(['buku']));
    }

    public function tambahBuku()
    {
        return view('admin.tambahBuku');
    }

    public function actionBuku(Request $request)
    {
        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $validasi = $request->validate(
            [
                'nama_buku' => 'required',
                'pengarang' => 'required',
                'penerbit' => 'required',
                'stok_buku' => 'required',
                'harga_buku' => 'required',
                'gambar' => 'required',
                'deskripsi' => 'required'
            ],
            [
                'nama_buku.required' => 'nama buku wajib diisi',
                'pengarang.required' => 'pengarang wajib diisi',
                'penerbit.required' => 'penerbit wajib diisi',
                'stok_buku.required' => 'stok buku wajib diisi',
                'harga_buku.required' => 'harga buku wajib diisi',
                'gambar.required' => 'gambar wajib diisi',
                'deskripsi.required' => 'deskripsi wajib diisi',
            ]
        );

        $data = $request->file('gambar'); //mengambil data file yang diupload
        $nama_file = $data->getClientOriginalName(); //mengambil nama file
        $data->move('images', $data->getClientOriginalName()); //memindahkan file ke folder tujuan

        // $upload = new Buku;
        // $upload->gambar = $nama_file;
        // $upload->deskripsi = $request->input('deskripsi');
        // $upload->nama_buku = $request->input('nama_buku');
        // $upload->pengarang = $request->input('pengarang');
        // $upload->penerbit = $request->input('penerbit');
        // $upload->stok_buku = $request->input('stok_buku');
        // $upload->harga_buku = $request->input('harga_buku');
        // $upload->save(); //menyimpan data ke database

        $validasi['gambar'] = $nama_file;

        Buku::create($validasi);
        return redirect()->route('admin.daftar.buku');
    }

    public function editBuku($id_buku)
    {
        $buku = buku::find($id_buku);
        return view('admin.editBuku', compact(['buku']));
    }

    public function updateBuku($id_buku, Request $request)
    {
        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $validasi = $request->validate(
            [
                'nama_buku' => 'required',
                'pengarang' => 'required',
                'penerbit' => 'required',
                'stok_buku' => 'required',
                'harga_buku' => 'required',
                'deskripsi' => 'required'
            ],
            [
                'nama_buku.required' => 'nama buku wajib diisi',
                'pengarang.required' => 'pengarang wajib diisi',
                'penerbit.required' => 'penerbit wajib diisi',
                'stok_buku.required' => 'stok buku wajib diisi',
                'harga_buku.required' => 'harga buku wajib diisi',
                'deskripsi.required' => 'deskripsi wajib diisi',
            ]
        );

        if ($request->gambar) {
            $file = public_path('/images/') . $request->gambarLama; //mengambil path atau url tempat file disimpan
            unlink($file); //menghapus file

            $data = $request->file('gambar'); //mengambil data file yang diupload
            $nama_file = $data->getClientOriginalName(); //mengambil nama file
            $data->move('images', $data->getClientOriginalName()); //memindahkan file ke folder tujuan

            $validasi['gambar'] = $nama_file;
        }

        $buku = Buku::find($id_buku);
        $buku->update($validasi);
        return redirect()->route('admin.daftar.buku');
    }

    public function deleteBuku($id_buku)
    {
        $buku = Buku::find($id_buku);
        $file = public_path('/images/') . $buku->gambar; //mengambil path atau url tempat file disimpan
        unlink($file); //menghapus file
        $buku->delete();
        return redirect()->route('admin.daftar.buku');
    }


    public function daftarUser()
    {
        $user = User::all();
        return view('admin.daftarUser', compact(['user']));
    }
}
