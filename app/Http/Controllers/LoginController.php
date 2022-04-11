<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login (Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('dashboard');
        }

        return redirect('/');
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
        ]);

        return view('auth.login');
    }

    // dd($request->all());
    // {
    //     return view('auth.login');
}
