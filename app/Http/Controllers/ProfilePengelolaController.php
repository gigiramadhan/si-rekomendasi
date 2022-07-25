<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilePengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('dashboard.pengelola.profile.profile_pengelola', compact('user'), [
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
        $image = $request->file('photo');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $user = array(
            'name' => $request->name,
            'username' => $request->username,
            'photo' => $new_image
        );

        $image->move(public_path('gambar'), $new_image);

        User::create($user);

        return redirect('profile_pengelola')->with('toast_success', 'Data berhasil ditambahkan');
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
    public function update_profile_pengelola(Request $request, $id)
    {
        $image_lama = $request->old_image;
        $image_baru = $request->file('photo');

        if($image_baru == ''){
            $photo = $image_lama;

        }else{
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $photo = $new_image;
            $image_baru->move(public_path('gambar'), $new_image);
        }

        // $user = $request->all();

        // $name = $request->input('name');
        // $username = $request->input('username');
        // $photo = $request->input('photo');
        // // $user['password'] = bcrypt($request->password);
        // $ubah_profil = User::findOrFail($id);
        // $ubah_profil->name = $name;
        // $ubah_profil->username = $username;
        // $ubah_profil->photo = $photo;
        // $ubah_profil->save();

        $user = User::find($id);

        $user->update(array(
            'name' => $request->name,
            'username' => $request->username,
            'photo' => $photo
        ));

        return redirect('profile_pengelola')->with('toast_success', 'Data berhasil diubah');
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

    public function ubah_password_pengelola(Request $request, $id)
    {
        $request->validate([
            'password_lama' => 'required|min:8',
            'password_baru' => 'required|min:8|confirmed',
            'password_baru_confirmation' => 'required|min:8'
        ]);

        $user = User::select('id','password')->whereId($id)->firstOrFail();
        if (Hash::check($request->password_lama, $user->password)) {
            $user->update(['password' => Hash::make($request->password_baru)]);

            return redirect('profile_pengelola')->with('toast_success', 'Password berhasil diubah');

        } else {
            return redirect()->back()->with('gagal', '<small class="text-danger">Password lama anda salah</small>');
        }

    }
}
