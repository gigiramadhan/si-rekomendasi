<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FasilitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\RumahPengelolaController;
use App\Http\Controllers\TransactionController;

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

// Beranda
    Route::get('/', [BerandaController::class, 'index'])->name('landing.beranda');

    Route::get('about', function () {
        return view('home.about');
    });

    Route::get('gallery', function () {
        return view('home.gallery');
    });

    Route::get('contact', function () {
        return view('home.contact');
    });

    Route::get('profile', function () {
        return view('dashboard.admin.profile.profile');
    });


// Login
    Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
    Route::post('simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'register']);
    Route::post('register', [RegisterController::class, 'store']);


// Middleware Group
Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('data_pengguna', PenggunaController::class);
    Route::get('data_pengguna', [PenggunaController::class, 'index'])->name('data_pengguna');
    Route::get('data_pengguna/create', [PenggunaController::class, 'create'])->name('data_pengguna.create');
    Route::post('data_pengguna/store', [PenggunaController::class, 'store'])->name('data_pengguna.store');
    Route::get('/tampiluser/{id}', [PenggunaController::class, 'tampiluser'])->name('tampiluser');
    Route::post('/updateuser/{id}', [PenggunaController::class, 'updateuser'])->name('updateuser');
    Route::get('/data_pengguna/destroy/{id}', [PenggunaController::class, 'destroy'])->name('data_pengguna.destroy');
    Route::get('/show/{id}', [PenggunaController::class, 'show'])->name('data_pengguna.show');
    Route::get('/pengguna/search', [PenggunaController::class, 'search']);
    // Route::resource('data_rumah', RumahController::class);
    Route::get('data_rumah', [RumahController::class, 'index'])->name('data_rumah');
    Route::post('data_rumah/store', [RumahController::class, 'store'])->name('data_rumah.store');
    Route::get('data_rumah/create', [RumahController::class, 'create'])->name('data_rumah.create');
    Route::get('/tampilrumah/{id}', [RumahController::class, 'tampilrumah'])->name('tampilrumah');
    Route::post('/updaterumah/{id}', [RumahController::class, 'updaterumah'])->name('updaterumah');
    Route::get('/data_rumah/destroy/{id}', [RumahController::class, 'destroy'])->name('data_rumah.destroy');
    Route::get('/showrumah/{id}', [RumahController::class, 'show'])->name('data_rumah.show');
    Route::get('/rumah/search', [RumahController::class, 'search']);
    // Route::resource('bobot', BobotController::class);
    Route::get('bobot', [BobotController::class, 'index'])->name('bobot');
    Route::post('bobot/store', [BobotController::class, 'store'])->name('bobot.store');
    Route::get('bobot/create', [BobotController::class, 'create'])->name('bobot.create');
    Route::get('/tampilbobot/{id}', [BobotController::class, 'tampilbobot'])->name('tampilbobot');
    Route::post('/updatebobot/{id}', [BobotController::class, 'updatebobot'])->name('updatebobot');
    Route::get('/bobot/destroy/{id}', [BobotController::class, 'destroy'])->name('bobot.destroy');
    Route::get('/bobot/search', [BobotController::class, 'search']);
    // Route::resource('berita', BeritaController::class);
    Route::get('berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/tampildata/{id}', [BeritaController::class, 'tampildata'])->name('tampildata');
    Route::post('/updatedata/{id}', [BeritaController::class, 'updatedata'])->name('updatedata');
    Route::get('/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::get('/berita/search', [BeritaController::class, 'search']);
    // Route::resource('kegiatan', EventController::class);
    Route::get('kegiatan', [EventController::class, 'index'])->name('kegiatan');
    Route::post('kegiatan/store', [EventController::class, 'store'])->name('kegiatan.store');
    Route::get('kegiatan/create', [EventController::class, 'create'])->name('kegiatan.create');
    Route::get('/tampilkegiatan/{id}', [EventController::class, 'tampilkegiatan'])->name('tampilkegiatan');
    Route::post('/updateevent/{id}', [EventController::class, 'updateevent'])->name('updateevent');
    Route::get('/kegiatan/destroy/{id}', [EventController::class, 'destroy'])->name('kegiatan.destroy');
    Route::get('/kegiatan/search', [EventController::class, 'search']);
});


// Middleware Group
Route::group(['middleware' => ['auth','ceklevel:pengelola']], function () {
    Route::get('dashboard_pengelola', function () {
        return view('dashboard.pengelola.dashboard_pengelola', [
            "title" => "Dashboard"
        ]);
    });
    // Route::resource('data_rumah_pengelola', RumahPengelolaController::class);
    Route::get('data_rumah_pengelola', [RumahPengelolaController::class, 'index'])->name('data_rumah_pengelola');
    Route::post('data_rumah_pengelola/store', [RumahPengelolaController::class, 'store'])->name('data_rumah_pengelola.store');
    Route::get('data_rumah_pengelola/create', [RumahPengelolaController::class, 'create'])->name('data_rumah_pengelola.create');
    Route::get('/tampilrumahpengelola/{id}', [RumahPengelolaController::class, 'tampilrumahpengelola'])->name('tampilrumahpengelola');
    Route::post('/updaterumahpengelola/{id}', [RumahPengelolaController::class, 'updaterumahpengelola'])->name('updaterumahpengelola');
    Route::get('/data_rumah_pengelola/destroy/{id}', [RumahPengelolaController::class, 'destroy'])->name('data_rumah_pengelola.destroy');
    Route::get('/showrumahpengelola/{id}', [RumahPengelolaController::class, 'show'])->name('data_rumah_pengelola.showrumahpengelola');
    Route::get('/rumahpengelola/search', [RumahPengelolaController::class, 'search']);
    // Route::resource('data_booking', BookingController::class);
    Route::get('data_booking', [BookingController::class, 'index'])->name('data_booking');
    Route::get('/booking/search', [BookingController::class, 'search']);
    // Route::resource('data_transaksi', TransactionController::class);
    Route::get('data_transaksi', [TransactionController::class, 'index'])->name('data_transaksi');
    Route::get('/transaksi/search', [TransactionController::class, 'search']);
    // Route::resource('fasilitas', FasilitasController::class);
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
    Route::post('fasilitas/store', [FasilitasController::class, 'store'])->name('fasilitas.store');
    Route::get('fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
    Route::get('/tampilfasilitas/{id}', [FasilitasController::class, 'tampilfasilitas'])->name('tampilfasilitas');
    Route::post('/updatefasilitas/{id}', [FasilitasController::class, 'updatefasilitas'])->name('updatefasilitas');
    Route::get('/fasilitas/destroy/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
    Route::get('/showfasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.showfasilitas');
    Route::get('/fasilitas/search', [FasilitasController::class, 'search']);
});


// Rekomendasi
    Route::get('rekomendasi', function () {
        return view('home.rekomendasi');
    });


