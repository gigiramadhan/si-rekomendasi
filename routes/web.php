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
use App\Models\RumahPengelola;

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
Route::get('/', [BerandaController::class, 'index'])->name('landing.beranda');

// Route::get('beranda', function () {
//     return view('landing.beranda');
// });

Route::get('about', function () {
    return view('home.about');
});

// Route::get('dashboard', function () {
//     return view('dashboard.admin.dashboard');
// });

Route::get('gallery', function () {
    return view('home.gallery');
});

Route::get('contact', function () {
    return view('home.contact');
});

// Route::get('dashboard_pengelola', function () {
//     return view('dashboard.pengelola.dashboard_pengelola');
// });

// Route::get('data_rumah', function () {
//     return view('dashboard.admin.data_rumah.data_rumah');
// });

// Route::get('bobot', function () {
//     return view('dashboard.admin.bobot.bobot');
// });

// Route::get('berita', function () {
//     return view('dashboard.admin.berita.berita');
// });

// Route::get('kegiatan', function () {
//     return view('dashboard.admin.kegiatan.kegiatan');
// });

// Route::get('login', function () {
//     return view('auth.login');
// });

// Route::get('data_booking', function () {
//     return view('dashboard.pengelola.data_booking.data_booking');
// });

// Route::get('data_transaksi', function () {
//     return view('dashboard.pengelola.data_transaksi.data_transaksi');
// });

// Route::get('data_rumah_pengelola', function () {
//     return view('dashboard.pengelola.data_rumah.data_rumah_pengelola');
// });

// Route::get('fasilitas', function () {
//     return view('dashboard.pengelola.fasilitas.fasilitas');
// });

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


// Middleware
Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    // Route::get('dashboard', function () {
    //     return view('dashboard.admin.dashboard', [
    //         "title" => "Dashboard"
    //     ]);
    // });
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('data_pengguna', [PenggunaController::class, 'index'])->name('data_pengguna');
    Route::get('data_rumah', [RumahController::class, 'index'])->name('data_rumah');
    Route::get('bobot', [BobotController::class, 'index'])->name('bobot');
    Route::get('berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('kegiatan', [EventController::class, 'index'])->name('kegiatan');
    Route::resource('data_pengguna', PenggunaController::class);
    Route::resource('data_rumah', RumahController::class);
    Route::resource('bobot', BobotController::class);
    // Route::resource('berita', BeritaController::class);
    Route::resource('kegiatan', EventController::class);
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::get('/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::post('berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/tampildata/{id}', [BeritaController::class, 'tampildata'])->name('tampildata');
    Route::post('/updatedata/{id}', [BeritaController::class, 'updatedata'])->name('updatedata');
    Route::get('/berita/search', [BeritaController::class, 'search']);
});

Route::group(['middleware' => ['auth','ceklevel:pengelola']], function () {
    Route::get('dashboard_pengelola', function () {
        return view('dashboard.pengelola.dashboard_pengelola');
    });
    Route::get('data_rumah_pengelola', [RumahPengelolaController::class, 'index'])->name('data_rumah_pengelola');
    Route::get('data_booking', [BookingController::class, 'index'])->name('data_booking');
    Route::get('data_transaksi', [TransactionController::class, 'index'])->name('data_transaksi');
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
    Route::resource('data_rumah_pengelola', RumahPengelolaController::class);
    Route::resource('data_booking', BookingController::class);
    Route::resource('data_transaksi', TransactionController::class);
    Route::resource('fasilitas', FasilitasController::class);
});


// Berita



// Bobot
Route::post('create', [BobotController::class, 'store']);

Route::get('create', [BobotController::class, 'create'])->name('bobot.create');

Route::get('/tampilbobot/{id}', [BobotController::class, 'tampilbobot'])->name('tampilbobot');

Route::post('/updatebobot/{id}', [BobotController::class, 'updatebobot'])->name('updatebobot');

Route::get('/bobot/search', [BobotController::class, 'search']);


// Kegiatan
Route::post('create', [EventController::class, 'store']);

Route::get('create', [EventController::class, 'create'])->name('kegiatan.create');

Route::get('/tampilkegiatan/{id}', [EventController::class, 'tampilkegiatan'])->name('tampilkegiatan');

Route::post('/updateevent/{id}', [EventController::class, 'updateevent'])->name('updateevent');

Route::get('/kegiatan/search', [EventController::class, 'search']);


// Data Rumah
Route::post('create', [RumahController::class, 'store']);

Route::get('create', [RumahController::class, 'create'])->name('data_rumah.create');

Route::get('/tampilrumah/{id}', [RumahController::class, 'tampilrumah'])->name('tampilrumah');

Route::post('/updaterumah/{id}', [RumahController::class, 'updaterumah'])->name('updaterumah');

Route::get('/showrumah/{id}', [RumahController::class, 'show'])->name('data_rumah.show');

Route::get('/rumah/search', [RumahController::class, 'search']);


// Data Pengguna
Route::post('create', [PenggunaController::class, 'store']);

Route::get('create', [PenggunaController::class, 'create'])->name('data_pengguna.create');

Route::get('/tampiluser/{id}', [PenggunaController::class, 'tampiluser'])->name('tampiluser');

Route::post('/updateuser/{id}', [PenggunaController::class, 'updateuser'])->name('updateuser');

Route::get('/show/{id}', [PenggunaController::class, 'show'])->name('data_pengguna.show');

Route::get('/pengguna/search', [PenggunaController::class, 'search']);


// Rekomendasi
Route::get('rekomendasi', function () {
    return view('home.rekomendasi');
});


// Transaksi
Route::get('/transaksi/search', [TransactionController::class, 'search']);


// Fasilitas
Route::post('create', [FasilitasController::class, 'store']);

Route::get('create', [FasilitasController::class, 'create'])->name('fasilitas.create');

Route::get('/tampilfasilitas/{id}', [FasilitasController::class, 'tampilfasilitas'])->name('tampilfasilitas');

Route::post('/updatefasilitas/{id}', [FasilitasController::class, 'updatefasilitas'])->name('updatefasilitas');

Route::get('/showfasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.showfasilitas');


// Data Rumah Pengelola
Route::post('create', [RumahPengelolaController::class, 'store']);

Route::get('create', [RumahPengelolaController::class, 'create'])->name('data_rumah_pengelola.create');

Route::get('/tampilrumahpengelola/{id}', [RumahPengelolaController::class, 'tampilrumahpengelola'])->name('tampilrumahpengelola');

Route::post('/updaterumahpengelola/{id}', [RumahPengelolaController::class, 'updaterumahpengelola'])->name('updaterumahpengelola');

Route::get('/showrumahpengelola/{id}', [RumahPengelolaController::class, 'show'])->name('data_rumah_pengelola.showrumahpengelola');


