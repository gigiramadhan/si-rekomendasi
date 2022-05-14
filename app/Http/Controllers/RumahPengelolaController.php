<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahPengelola;
use Illuminate\Support\Facades\File;

class RumahPengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $rumah = RumahPengelola::latest()->paginate(3);

        return view('dashboard.pengelola.data_rumah.data_rumah_pengelola', compact('rumah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengelola.data_rumah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data = array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $request->fasilitas,
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

        return view('dashboard.pengelola.data_rumah.showrumahpengelola', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilrumahpengelola($id){

        $data = RumahPengelola::find($id);
        // dd($data);

        return view('dashboard.pengelola.data_rumah.tampilrumahpengelola', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updaterumahpengelola(Request $request, $id){

        $image_lama = $request->old_image;
        $image_baru = $request->file('gambar');

        if($image_baru == ''){
            $gambar = $image_lama;

        }else{
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path('gambar'), $new_image);;
        }

        $data = RumahPengelola::find($id);
        // $data->update($request->all());

        $data->update(array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $request->fasilitas,
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

    public function search(Request $request){

        if($request->has('search')){
            $rumah = RumahPengelola::where('nama_perumahan', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $rumah = RumahPengelola::all();
        }

        return view('dashboard.pengelola.data_rumah.data_rumah_pengelola', compact('rumah'));
    }
}
