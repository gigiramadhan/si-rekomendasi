<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\validatedData;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255|unique:users',
        //     'username' => 'required|min:3|max:255|unique:users',
            // 'nik' => 'required|unique:users,nik|numeric',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:5|max:255',
        // ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);

        // User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull please login');

        // return redirect('/login')->with('success', 'Registration successfull please login');

    }
}
