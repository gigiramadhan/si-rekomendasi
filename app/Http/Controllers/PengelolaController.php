<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengelola = DB::table('users')->where('level', 'pengelola')->get();

        return view('dashboard.admin.data_pengguna.data_pengelola.data_pengelola', compact('pengelola'), [
            "title" => "Data Pengguna"
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.data_pengguna.data_pengelola.create', [
            "title" => "Tambah Pengguna"
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/data_pengelola/create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = array(
            'name' => $request->name,
            'username' => $request->username,
            'level' => $request->level,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        );

        User::create($data);

        return redirect('data_pengelola')->with('toast_success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);

        return view('dashboard.admin.data_pengguna.data_pengelola.show_pengelola', compact('data'), [
            "title" => "Detail Pengguna"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilpengelola($id)
    {
        $data = User::find($id);

        return view('dashboard.admin.data_pengguna.data_pengelola.tampil_pengelola', compact('data'), [
            "title" => "Edit Pengguna"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepengelola(Request $request, $id)
    {
        $data = User::find($id);
        $data->update(array(
            'name' => $request->name,
            'username' => $request->username,
            'level' => $request->level,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ));

        return redirect('data_pengelola')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = User::find($id);

        $pengguna->delete();

        return redirect('data_pengelola')->with('toast_success', 'Data berhasil dihapus');
    }
}
