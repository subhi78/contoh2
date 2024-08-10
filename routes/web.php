<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GameController;


Route::get('/game', [GameController::class, 'index'])->name('game');
Route::get('/tiktak', [GameController::class, 'tiktak'])->name('tiktak');
Route::get('/gkb', [GameController::class, 'gkb'])->name('gkb');
// Auth::routes();

// Route::get('/', function () {
//     return view('index');
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/denah-unw', [DashboardController::class, 'denah'])->name('denah');
Route::get('/struktur-org', [DashboardController::class, 'struktur'])->name('struktur');
Route::get('/galeri', [DashboardController::class, 'galeri'])->name('galeri');
Route::get('/download', [DashboardController::class, 'dokumen'])->name('download');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/profil', [AdminController::class, 'profil'])->name('profil');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    // GALLERY
    Route::get('/gallery', [ImagesController::class, 'index'])->name('gallery');
    Route::get('/create', [ImagesController::class, 'create'])->name('create');

    Route::post('/post', [ImagesController::class, 'store'])->name('gallery-post');
    Route::get('/show/{id}', [ImagesController::class, 'show'])->name('gallery-show');
    Route::delete('/delete/{id}', [ImagesController::class, 'destroy'])->name('gallery-delete');
    Route::get('/edit/{id}', [ImagesController::class, 'edit'])->name('gallery-edit');

    Route::delete('/deleteimage/{id}', [ImagesController::class, 'deleteimage'])->name('gallery-deleteimage');
    Route::delete('/deletecover/{id}', [ImagesController::class, 'deletecover'])->name('gallery-deletecover');

    Route::put('/update/{id}', [ImagesController::class, 'update'])->name('gallery-update');

    // SLIDER
    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::get('/buat', [SliderController::class, 'create'])->name('slider-create');

    Route::post('/d', [SliderController::class, 'store'])->name('slider-post');
    Route::delete('/hapus-slider/{id}', [SliderController::class, 'destroy'])->name('slider-delete');

    //ARTIKEL
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
    Route::get('/artikel-tambah', [ArtikelController::class, 'create'])->name('artikel-create');
    Route::post('/a', [ArtikelController::class, 'store'])->name('artikel-store');

    Route::get('/tampil/{id}', [ArtikelController::class, 'show'])->name('artikel-show');
    Route::delete('/artikel/hapus/{id}', [ArtikelController::class, 'destroy'])->name('artikel-delete');
    Route::get('/ubah/{id}', [ArtikelController::class, 'edit'])->name('artikel-edit');


    Route::put('/perbarui/{id}', [ArtikelController::class, 'update'])->name('artikel-update');
    Route::delete('/deletegambar/{id}', [ArtikelController::class, 'deletecover'])->name('artikel-deletecover');

    //AGENDA
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
    Route::get('/agenda/tambah', [AgendaController::class, 'create'])->name('agenda-create');
    Route::post('/agenda/simpan', [AgendaController::class, 'store'])->name('agenda-store');
    Route::delete('/agenda/hapus/{id}', [AgendaController::class, 'destroy'])->name('agenda-delete');

    //DOKUMEN
    Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen');
    Route::get('/dokumen/tambah', [DokumenController::class, 'create'])->name('dokumen-create');
    Route::post('/dokumen/simpan', [DokumenController::class, 'store'])->name('dokumen-store');
    Route::delete('/dokumen/hapus/{id}', [DokumenController::class, 'destroy'])->name('dokumen-delete');
    Route::get('/dokumen/ubah/{id}', [DokumenController::class, 'dokumenedit'])->name('dokumen-edit');
    Route::put('/dokumen/perbarui/{id}', [DokumenController::class, 'dokumenupdate'])->name('dokumen-update');
});
