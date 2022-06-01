<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('dashboard.admin.profile.profile', compact('user'), [
            "title" => "Profile"
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateprofile(Request $request, $id)
    {
        $user = $request->all();

        $name = $request->input('name');
        $username = $request->input('username');
        // $user['password'] = bcrypt($request->password);
        $ubah_profil = User::findOrFail($id);
        $ubah_profil->name = $name;
        $ubah_profil->username = $username;
        $ubah_profil->save();

        return redirect('profile')->with('toast_success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ubah_password(Request $request, $id)
    {
        $request->validate([
            'password_lama' => 'required|min:8',
            'password_baru' => 'required|min:8|confirmed',
            'password_baru_confirmation' => 'required|min:8'
        ]);

        $user = User::select('id','password')->whereId($id)->firstOrFail();
        if (Hash::check($request->password_lama, $user->password)) {
            $user->update(['password' => Hash::make($request->password_baru)]);

            return redirect('profile')->with('toast_success', 'Password berhasil diubah');

        } else {
            return redirect()->back()->with('gagal', '<small class="text-danger">Password lama anda salah</small>');
        }

    }
}
