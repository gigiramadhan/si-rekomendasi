<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Crips;
use Illuminate\Http\Request;

class CripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crips = Crips::latest()->paginate(3);

        return view('dashboard.admin.crips.crips', compact('crips'), [
            "title" => "Kriteria"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('dashboard.admin.crips.create', compact('id'), [
            "title" => "Tambah Crips"
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
        // return $request->all();
        $data = [
            'id_kriteria' => $request->id_kriteria,
            'nama_crips' => $request->nama_crips,
            'bobot' => $request->bobot,
        ];

        Crips::create($data);

        return redirect()->route('showbobot', $request->id_kriteria )->with('toast_success', 'Data berhasil ditambahkan');
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
    public function tampil_crips($id)
    {
        $data = Crips::find($id);
        // dd($data);

        return view('dashboard.admin.crips.tampil_crips', compact('data'), [
            "title" => "Edit Crips"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecrips(Request $request, $id)
    {
        $data = Crips::find($id);
        $data->update($request->all());

        return redirect()->route('showbobot',  $data->id_kriteria )->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crips = Crips::find($id);
        // return $crips->id_kriteria;
        $crips->delete();

        return redirect()->route('showbobot',  $crips->id_kriteria )->with('toast_success', 'Data berhasil dihapus');
    }
}
