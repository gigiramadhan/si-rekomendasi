<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahPengelola;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class RumahPengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumah = RumahPengelola::latest()->get();

        return view('dashboard.pengelola.data_rumah.data_rumah_pengelola', compact('rumah'), [
            "title" => "Data Rumah"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengelola.data_rumah.create', [
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
            'type' => 'required',
            'nama_perumahan' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg',
        ]);

        if ($validator->fails()) {
            return redirect('/data_rumah_pengelola/create')
                ->withErrors($validator)
                ->withInput();
        }

        $fasilitasinput = $request->input('fasilitas');
        $fasilitas = implode(', ', $fasilitasinput);

        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data = array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $fasilitas,
            'gambar' => $new_image,
        );

        $image->move(public_path('gambar'), $new_image);

        RumahPengelola::create($data);

        return redirect('data_rumah_pengelola')->with('toast_success', 'Data berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RumahPengelola::find($id);

        return view('dashboard.pengelola.data_rumah.showrumahpengelola', compact('data'), [
            "title" => "Detail Rumah"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilrumahpengelola($id)
    {
        $data = RumahPengelola::find($id);

        $fasilitas = explode(', ', $data->fasilitas);

        return view('dashboard.pengelola.data_rumah.tampilrumahpengelola', compact('data'), [
            "title" => "Edit Data Rumah",
            'fasilitas' => $fasilitas
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updaterumahpengelola(Request $request, $id)
    {
        $image_lama = $request->old_image;
        $image_baru = $request->file('gambar');

        if($image_baru == ''){
            $gambar = $image_lama;

        }else{
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path('gambar'), $new_image);;
        }

        $facility = $request->input('fasilitas');
        $hasil = implode(', ', $facility);

        $data = RumahPengelola::find($id);

        $data->update(array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $hasil,
            'gambar' => $gambar
        ));

        return redirect('data_rumah_pengelola')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumah = RumahPengelola::find($id);
        $image_path = public_path("gambar/{$rumah->gambar}");
        File::delete($image_path);

        $rumah->delete();

        return redirect('data_rumah_pengelola')->with('toast_success', 'Data berhasil dihapus');
    }
}
