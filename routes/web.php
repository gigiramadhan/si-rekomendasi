<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CripsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HasilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardPengelolaController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePengelolaController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\RumahPengelolaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
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

// Beranda
    // Route::get('/', [BerandaController::class, 'index'])->name('landing.beranda');
    Route::get('/', function () {
        return view('landing.beranda', [
            "title" => "SIREKPERUM"
        ]);
    });

    // Route::get('welcome', function () {
    //     return view('welcome', [
    //         "title" => "SIREKPERUM"
    //     ]);
    // });

    Route::get('about', function () {
        return view('home.about', [
            "title" => "About"
        ]);
    });

    Route::get('gallery', function () {
        return view('home.gallery', [
            "title" => "Gallery"
        ]);
    });

    Route::get('contact', function () {
        return view('home.contact', [
            "title" => "Contact"
        ]);
    });

    // Route::get('berita/fetch-all', [BeritaController::class, 'fetchAll'])->name('berita.fetch');

// Information
    Route::get('detail_berita/{id}', [BeritaController::class, 'detail'])->name('detail_berita');
    Route::get('detail_kegiatan/{id}', [KegiatanController::class, 'detail'])->name('detail_kegiatan');
    Route::get('home_kegiatan', [KegiatanController::class, 'home_kegiatan'])->name('home_kegiatan');
    Route::get('home_berita', [BeritaController::class, 'home_berita'])->name('home_berita');
    Route::get('berita_user', [BeritaController::class, 'berita'])->name('berita_user');
    Route::get('kegiatan_user', [KegiatanController::class, 'kegiatan'])->name('kegiatan_user');
    // Route::get('data_rumah_user', [RumahPengelolaController::class, 'data_rumah'])->name('data_rumah_user');
    Route::get('data_rumah_user', [RumahController::class, 'data_rumah'])->name('data_rumah_user');



// Login
    Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
    Route::post('simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
    Route::post('login', [LoginController::class, 'login'])->name('login.login');
    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'register']);
    Route::post('register', [RegisterController::class, 'store']);


// Middleware Group Admin
    Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    // Dashboard Admin
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Data Admin
    Route::get('data_admin', [AdminController::class, 'index'])->name('data_admin');
    Route::get('data_admin/create', [AdminController::class, 'create'])->name('data_admin.create');
    Route::post('data_admin/store', [AdminController::class, 'store'])->name('data_admin.store');
    Route::get('data_admin/tampiladmin/{id}', [AdminController::class, 'tampiladmin'])->name('data_admin.tampiladmin');
    Route::post('updateadmin/{id}', [AdminController::class, 'updateadmin'])->name('updateadmin');
    Route::get('data_admin/destroy/{id}', [AdminController::class, 'destroy'])->name('data_admin.destroy');
    Route::get('data_admin/show/{id}', [AdminController::class, 'show'])->name('data_admin.show');
    Route::get('/pengguna/search', [AdminController::class, 'search']);
    // Data Pengelola
    Route::get('data_pengelola', [PengelolaController::class, 'index'])->name('data_pengelola');
    Route::get('data_pengelola/create', [PengelolaController::class, 'create'])->name('data_pengelola.create');
    Route::post('data_pengelola/store', [PengelolaController::class, 'store'])->name('data_pengelola.store');
    Route::get('data_pengelola/tampil_pengelola/{id}', [PengelolaController::class, 'tampilpengelola'])->name('data_pengelola.tampil_pengelola');
    Route::post('updatepengelola/{id}', [PengelolaController::class, 'updatepengelola'])->name('updatepengelola');
    Route::get('data_pengelola/destroy/{id}', [PengelolaController::class, 'destroy'])->name('data_pengelola.destroy');
    Route::get('data_pengelola/show_pengelola/{id}', [PengelolaController::class, 'show'])->name('data_pengelola.show_pengelola');
    // Data User
    Route::get('data_user', [UserController::class, 'index'])->name('data_user');
    Route::get('data_user/destroy/{id}', [UserController::class, 'destroy'])->name('data_user.destroy');
    Route::get('data_user/show_user/{id}', [UserController::class, 'show'])->name('data_user.show_user');
    // Data Rumah
    Route::get('data_rumah', [RumahController::class, 'index'])->name('data_rumah');
    Route::post('data_rumah/store', [RumahController::class, 'store'])->name('data_rumah.store');
    Route::get('data_rumah/create', [RumahController::class, 'create'])->name('data_rumah.create');
    Route::get('data_rumah/tampilrumah/{id}', [RumahController::class, 'tampilrumah'])->name('data_rumah.tampilrumah');
    Route::post('/updaterumah/{id}', [RumahController::class, 'updaterumah'])->name('updaterumah');
    Route::get('data_rumah/destroy/{id}', [RumahController::class, 'destroy'])->name('data_rumah.destroy');
    Route::get('data_rumah/showrumah/{id}', [RumahController::class, 'show'])->name('data_rumah.showrumah');
    Route::get('/rumah/search', [RumahController::class, 'search']);
    // Bobot
    Route::get('bobot', [BobotController::class, 'index'])->name('bobot');
    Route::post('bobot/store', [BobotController::class, 'store'])->name('bobot.store');
    Route::get('bobot/create', [BobotController::class, 'create'])->name('bobot.create');
    Route::get('bobot/tampilbobot/{id}', [BobotController::class, 'tampilbobot'])->name('bobot.tampilbobot');
    Route::post('/updatebobot/{id}', [BobotController::class, 'updatebobot'])->name('updatebobot');
    Route::get('/bobot/destroy/{id}', [BobotController::class, 'destroy'])->name('bobot.destroy');
    Route::get('/showbobot/{id}', [BobotController::class, 'show'])->name('showbobot');
    Route::get('/bobot/search', [BobotController::class, 'search']);
    // Crips
    Route::get('crips/{id}', [CripsController::class, 'index'])->name('crips');
    Route::post('crips/store', [CripsController::class, 'store'])->name('crips.store');
    Route::get('crips/create/{id}', [CripsController::class, 'create'])->name('crips.create');
    Route::get('/tampil_crips/{id}', [CripsController::class, 'tampil_crips'])->name('tampil_crips');
    Route::post('/updatecrips/{id}', [CripsController::class, 'updatecrips'])->name('updatecrips');
    Route::get('/crips/destroy/{id}', [CripsController::class, 'destroy'])->name('crips.destroy');
    // Berita
    Route::get('berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/tampildata/{id}', [BeritaController::class, 'tampildata'])->name('berita.tampildata');
    Route::post('/updatedata/{id}', [BeritaController::class, 'updatedata'])->name('updatedata');
    Route::get('/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::get('/berita/search', [BeritaController::class, 'search']);
    // Kegiatan
    Route::get('kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
    Route::post('kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::get('kegiatan/tampilkegiatan/{id}', [KegiatanController::class, 'tampilkegiatan'])->name('kegiatan.tampilkegiatan');
    Route::post('/updatekegiatan/{id}', [KegiatanController::class, 'updatekegiatan'])->name('updatekegiatan');
    Route::get('/kegiatan/destroy/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
    Route::get('/kegiatan/search', [KegiatanController::class, 'search']);
    // Profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/update_profile/{id}', [ProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('/ubah_password/{id}', [ProfileController::class, 'ubah_password'])->name('ubah_password');
});


// Middleware Group Pengelola
    Route::group(['middleware' => ['auth','ceklevel:pengelola']], function () {
    // Dashboard Pengelola
    Route::get('dashboard_pengelola', [DashboardPengelolaController::class, 'index'])->name('dashboard_pengelola');
    // Data Rumah
    Route::get('data_rumah_pengelola', [RumahPengelolaController::class, 'index'])->name('data_rumah_pengelola');
    Route::post('data_rumah_pengelola/store', [RumahPengelolaController::class, 'store'])->name('data_rumah_pengelola.store');
    Route::get('data_rumah_pengelola/create', [RumahPengelolaController::class, 'create'])->name('data_rumah_pengelola.create');
    Route::get('data_rumah_pengelola/tampilrumahpengelola/{id}', [RumahPengelolaController::class, 'tampilrumahpengelola'])->name('data_rumah_pengelola.tampilrumahpengelola');
    Route::post('/updaterumahpengelola/{id}', [RumahPengelolaController::class, 'updaterumahpengelola'])->name('updaterumahpengelola');
    Route::get('/data_rumah_pengelola/destroy/{id}', [RumahPengelolaController::class, 'destroy'])->name('data_rumah_pengelola.destroy');
    Route::get('data_rumah_pengelola/showrumahpengelola/{id}', [RumahPengelolaController::class, 'show'])->name('data_rumah_pengelola.showrumahpengelola');
    Route::get('/rumahpengelola/search', [RumahPengelolaController::class, 'search']);
    // Data Booking
    Route::get('data_booking', [BookingController::class, 'index'])->name('data_booking');
    Route::post('/updatebooking/{id}', [BookingController::class, 'updatebooking'])->name('updatebooking');
    Route::get('data_booking/showbooking/{id}', [BookingController::class, 'show'])->name('data_booking.showbooking');
    Route::get('/data_booking/destroy/{id}', [BookingController::class, 'destroy'])->name('data_booking.destroy');
    Route::get('/booking/search', [BookingController::class, 'search']);
    // Fasilitas
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
    Route::post('fasilitas/store', [FasilitasController::class, 'store'])->name('fasilitas.store');
    Route::get('fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
    Route::get('fasilitas/tampilfasilitas/{id}', [FasilitasController::class, 'tampilfasilitas'])->name('fasilitas.tampilfasilitas');
    Route::post('/updatefasilitas/{id}', [FasilitasController::class, 'updatefasilitas'])->name('updatefasilitas');
    Route::get('/fasilitas/destroy/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
    Route::get('fasilitas/showfasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.showfasilitas');
    Route::get('/fasilitas/search', [FasilitasController::class, 'search']);
    // Profile
    Route::get('/profile_pengelola', [ProfilePengelolaController::class, 'index'])->name('profile_pengelola');
    Route::post('/profile_pengelola/store', [ProfilePengelolaController::class, 'store'])->name('profile_pengelola.store');
    Route::post('/update_profile_pengelola/{id}', [ProfilePengelolaController::class, 'update_profile_pengelola'])->name('update_profile_pengelola');
    Route::post('/ubah_password_pengelola/{id}', [ProfilePengelolaController::class, 'ubah_password_pengelola'])->name('ubah_password_pengelola');
});


// Middleware Group User
    Route::group(['middleware' => ['auth','ceklevel:pengunjung']], function () {
    // Rekomendasi
    Route::get('rekomendasi', function () {
        return view('sirekomendasi.rekomendasi.rekomendasi', [
            "title" => "Rekomendasi"
        ]);
    });
    Route::post('rekomendasi/store', [RekomendasiController::class, 'store'])->name('rekomendasi.store');
    Route::get('rekomendasi/create', [RekomendasiController::class, 'create'])->name('rekomendasi.create');
    // Hasil Rekomendasi
    Route::get('hasil', function () {
        return view('sirekomendasi.rekomendasi.hasil', [
            "title" => "Rekomendasi"
        ]);
    });
    // Booking Rumah
    Route::post('booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('booking/create/{rumah_id}', [BookingController::class, 'create'])->name('booking.create');
    // Status Booking
    Route::get('status', [StatusController::class, 'index'])->name('status');
    // Informasi User
    Route::get('kegiatan_user', [KegiatanController::class, 'kegiatan'])->name('kegiatan_user');
    Route::get('berita_user', [BeritaController::class, 'berita'])->name('berita_user');
    // Profile
    Route::get('profile_user', [ProfileUserController::class, 'index'])->name('profile_user');
    Route::post('profile_user/store', [ProfileUserController::class, 'store'])->name('profile_user.store');
    Route::post('/update_profile_user/{id}', [ProfileUserController::class, 'update_profile_user'])->name('update_profile_user');
    Route::post('/ubah_password_user/{id}', [ProfileUserController::class, 'ubah_password_user'])->name('ubah_password_user');
});



