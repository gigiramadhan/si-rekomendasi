<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login (Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        if(Auth::attempt($request->only('email', 'password'))){

            if(Auth::user()->level == 'admin'){
                return redirect('/dashboard')->withSuccess('Hai Admin, Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan!');
            } else if(Auth::user()->level == 'pengelola'){
                return redirect('/dashboard_pengelola')->withSuccess('Hai Pengelola, Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan!');
            } else if(Auth::user()->level == 'pengunjung'){
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

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255|unique:users',
            'username' => 'required|min:3|max:255|unique:users',
            // 'nik' => 'required|unique:users,nik|numeric',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'level' => 'required',
        ]
        // [
        //     'nik.numeric' => 'Silahkan Masukkan NIK anda'
        // ]
    );

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/registrasi')
                ->withErrors($validator)
                ->withInput();
        }

        // $validator['password'] = Hash::make($request->password);

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'nik' => $request->nik ? $request->nik : null,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ];

        User::create($data);

        // $request->session()->flash('success', 'Registration successfull please login');

        return redirect('/login')->with('successregis', 'Registration successfull please login');

        // User::create([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        //     'level' => 'user',
        // ]);

        // return view('auth.login');
    }

    // dd($request->all());
    // {
    //     return view('auth.login');

    public function logout (){
        Auth::logout();
        return redirect('/');
    }
}

