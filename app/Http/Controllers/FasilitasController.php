<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $fasilitas = Fasilitas::latest()->paginate(7);

        return view('dashboard.pengelola.fasilitas.fasilitas', compact('fasilitas'), [
            "title" => "Fasilitas"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengelola.fasilitas.create', [
            "title" => "Tambah Data"
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
            'name_fasility' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/fasilitas/create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = array(
            'name_fasility' => $request->name_fasility,
            'keterangan' => $request->keterangan,
        );

        Fasilitas::create($data);

        return redirect('fasilitas')->with('toast_success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Fasilitas::find($id);

        return view('dashboard.pengelola.fasilitas.showfasilitas', compact('data'), [
            "title" => "Detail Fasilitas"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilfasilitas($id){

        $data = Fasilitas::find($id);

        return view('dashboard.pengelola.fasilitas.tampilfasilitas', compact('data'), [
            "title" => "Edit Data"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatefasilitas(Request $request, $id){

        $data = Fasilitas::find($id);

        $data->update(array(
            'name_fasility' => $request->name_fasility,
            'keterangan' => $request->keterangan,
        ));

        return redirect('fasilitas')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);

        $fasilitas->delete();

        return redirect('fasilitas')->with('toast_success', 'Data berhasil dihapus');
    }
}
