<?php

use App\Http\Middleware\user;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/', [TokoController::class, 'index'])->name('home');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'autentikasi']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'actionRegister']);
});

Route::get('/user', [UserController::class, 'index'])->middleware('user');
Route::get('/user/buku', [UserController::class, 'tampilBuku'])->middleware('user');
Route::post('/user/logout', [LogoutController::class, 'index'])->middleware('user');

Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/daftar-buku', [AdminController::class, 'daftarBuku'])->name('admin.daftar.buku');
    Route::get('/admin/tambah-buku', [AdminController::class, 'tambahBuku'])->name('admin.tambah.buku');
    Route::post('/admin/action-tambah', [AdminController::class, 'actionBuku'])->name('admin.action.buku');
    Route::get('/admin/edit-buku/{id_buku}', [AdminController::class, 'editBuku'])->name('admin.edit.buku');
    Route::put('/admin/update-buku/{id_buku}', [AdminController::class, 'updateBuku'])->name('admin.update.buku');
    Route::delete('/admin/delete-buku/{id_buku}', [AdminController::class, 'deleteBuku'])->name('admin.delete.buku');
    Route::get('/admin/daftar-user', [AdminController::class, 'daftarUser'])->name('admin.daftar.user');
    Route::post('/admin/logout', [LogoutController::class, 'index'])->name('admin.logout');
});
