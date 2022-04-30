<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $pengguna = User::latest()->paginate(2);

        return view('dashboard.admin.data_pengguna.data_pengguna', compact('pengguna'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.data_pengguna.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'username' => $request->username,
            'level' => $request->level,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        );

        User::create($data);

        return redirect('data_pengguna')->with('toast_success', 'Data berhasil ditambahkan');
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

        return view('dashboard.admin.data_pengguna.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampiluser($id)
    {
        $data = User::find($id);
        // dd($data);

        return view('dashboard.admin.data_pengguna.tampilpengguna', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());

        return redirect('data_pengguna')->with('toast_success', 'Data berhasil diupdate');
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

        return redirect('data_pengguna')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $pengguna = User::where('level', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $pengguna = User::all();
        }

        return view('dashboard.admin.data_pengguna.data_pengguna', compact('pengguna'));
    }
}
