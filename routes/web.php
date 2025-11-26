<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreController;

// ADMIN
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProdukController as AdminProdukController;
use App\Http\Controllers\Admin\TokoController;

// MEMBER
use App\Http\Controllers\Member\ProdukController as MemberProdukController;
use App\Http\Controllers\Member\TokoController as MemberTokoController;
use App\Http\Controllers\Member\ProfilController;


/*
|--------------------------------------------------------------------------
| PUBLIC PAGE (SEBELUM LOGIN)
|--------------------------------------------------------------------------
*/

Route::get('/beranda', function () {
    return view('public.home');
})->name('public.home');

Route::get('/toko', function () {
    return view('public.toko');
})->name('public.toko');

Route::get('/produk', function () {
    return view('public.produk');
})->name('public.produk');

Route::get('/registrasi', function () {
    return view('public.register');
})->name('public.register');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

// LOGIN menggantikan halaman beranda lama
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // USER
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    // KATEGORI
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    // PRODUK ADMIN
    Route::get('/produk', [AdminProdukController::class, 'adminIndex'])->name('produk.index');
    Route::get('/produk/create', [AdminProdukController::class, 'adminCreate'])->name('produk.create');
    Route::post('/produk', [AdminProdukController::class, 'adminStore'])->name('produk.store');
    Route::get('/produk/{id}/edit', [AdminProdukController::class, 'adminEdit'])->name('produk.edit');
    Route::put('/produk/{id}', [AdminProdukController::class, 'adminUpdate'])->name('produk.update');
    Route::delete('/produk/{id}', [AdminProdukController::class, 'adminDestroy'])->name('produk.destroy');

    // TOKO ADMIN
    Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/create', [TokoController::class, 'create'])->name('toko.create');
    Route::post('/toko', [TokoController::class, 'store'])->name('toko.store');
});


/*
|--------------------------------------------------------------------------
| MEMBER AREA
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('member')->name('member.')->group(function () {

    Route::get('/dashboard', function () {
        return view('member.dashboard');
    })->name('dashboard');

    // PROFIL MEMBER
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

    // PRODUK MEMBER
    Route::get('/produk', [MemberProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [MemberProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [MemberProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id}/edit', [MemberProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [MemberProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [MemberProdukController::class, 'destroy'])->name('produk.destroy');

    // TOKO MEMBER
    Route::get('/toko', [MemberTokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/create', [MemberTokoController::class, 'create'])->name('toko.create');
    Route::post('/toko', [MemberTokoController::class, 'store'])->name('toko.store');
    Route::get('/toko/{id}/edit', [MemberTokoController::class, 'edit'])->name('toko.edit');
    Route::put('/toko/{id}', [MemberTokoController::class, 'update'])->name('toko.update');
    Route::delete('/toko/{id}', [MemberTokoController::class, 'destroy'])->name('toko.destroy'); // opsional jika perlu
});
