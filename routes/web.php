<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BobotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('landing.beranda');
});

Route::get('beranda', function () {
    return view('landing.beranda');
});

Route::get('about', function () {
    return view('home.about');
});

Route::get('dashboard', function () {
    return view('dashboard.admin.dashboard');
});

Route::get('gallery', function () {
    return view('home.gallery');
});

Route::get('contact', function () {
    return view('home.contact');
});

Route::get('dashboard_pengelola', function () {
    return view('dashboard.pengelola.dashboard_pengelola');
});

Route::get('data_rumah', function () {
    return view('dashboard.admin.data_rumah.data_rumah');
});

Route::get('bobot', function () {
    return view('dashboard.admin.bobot.bobot');
});

Route::get('berita', function () {
    return view('dashboard.admin.berita.berita');
});

Route::get('kegiatan', function () {
    return view('dashboard.admin.kegiatan.kegiatan');
});

// Route::get('login', function () {
//     return view('auth.login');
// });

Route::get('data_booking', function () {
    return view('dashboard.pengelola.data_booking.data_booking');
});

Route::get('data_transaksi', function () {
    return view('dashboard.pengelola.data_transaksi.data_transaksi');
});

Route::get('data_rumahpeng', function () {
    return view('dashboard.pengelola.data_rumah.data_rumahpeng');
});

Route::get('fasilitas', function () {
    return view('dashboard.pengelola.fasilitas.fasilitas');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');

Route::post('simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'register']);

Route::post('register', [RegisterController::class, 'store']);

Route::resource('berita', BeritaController::class);

// Route::get('create', function () {
//     return view('dashboard.admin.berita.create');
// });

Route::get('berita', [BeritaController::class, 'index'])->name('berita.berita');

Route::post('create', [BeritaController::class, 'store']);

Route::get('create', [BeritaController::class, 'create'])->name('berita.create');

// Route::get('edit', [BeritaController::class, 'edit'])->name('berita.edit');

Route::get('/tampildata/{id}', [BeritaController::class, 'tampildata'])->name('tampildata');

Route::post('/updatedata/{id}', [BeritaController::class, 'updatedata'])->name('updatedata');

Route::get('/search', [BeritaController::class, 'search']);

// Route::get('/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::resource('bobot', BobotController::class);

Route::get('bobot', [BobotController::class, 'index'])->name('bobot.bobot');

Route::post('create', [BobotController::class, 'store']);

Route::get('create', [BobotController::class, 'create'])->name('bobot.create');

Route::get('/tampilbobot/{id}', [BobotController::class, 'tampilbobot'])->name('tampilbobot');

Route::post('/updatebobot/{id}', [BobotController::class, 'updatebobot'])->name('updatebobot');

Route::get('/search', [BobotController::class, 'search']);
