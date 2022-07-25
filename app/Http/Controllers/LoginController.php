<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login (Request $request){

        if(Auth::attempt($request->only('email', 'password'))){

            if(Auth::user()->level == 'admin'){
                return redirect('/dashboard')->withSuccess('Hai Admin, Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan!');
            } else if(Auth::user()->level == 'pengelola'){
                return redirect('/dashboard_pengelola')->withSuccess('Hai Pengelola, Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan!');
            } else if(Auth::user()->level == 'user'){
                return redirect('/rekomendasi')->withSuccess('Hai User, Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan!');
            } else {
                return redirect('/');
            }
        }

        // session()->setFlashdata('message', 'Hai Admin, Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan!!!');

        return redirect('/login')->withSuccess('Email atau Password yang anda masukkan salah!');
    }

    public function registrasi(){
        return view('auth.register');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'user',
        ]);

        return view('auth.login');
    }

    // dd($request->all());
    // {
    //     return view('auth.login');

    public function logout (){
        Auth::logout();
        return redirect('/');
    }
}

