<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $tb_rumah = Rumah::paginate(3);

        return view('dashboard.admin.data_rumah.data_rumah', ['tb_rumah' => $tb_rumah]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.data_rumah.create');
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

        Rumah::create($data);

        return redirect()->route('data_rumah.data_rumah')->with('toast_success', 'Data berhasil ditambahkan');
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
    public function tampilrumah($id){

        $tb_rumah = Rumah::find($id);
        // dd($data);

        return view('dashboard.admin.data_rumah.tampilrumah', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updaterumah(Request $request, $id){

        // $image_name = $request->old_image;
        // $image = $request->file("\gambar");

        // if($image != ''){

        //     $image_name = rand() .'.'. $image->getClientOriginalExtension();
        //     $image->move(public_path("\gambar"), $image_name);
        // }

        // $data = Berita::find($id);

        // $data->update($request->all());

        $image_lama = $request->old_image;
        $image_baru = $request->file('gambar');

        // return $image_baru;

        if($image_baru == ''){
            $gambar = $image_lama;

        }else{
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path('gambar'), $new_image);;
        }

        $data = Rumah::find($id);

        // $data->update($request->all());

        $data->update(array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $request->fasilitas,
            'gambar' => $gambar
        ));

        return redirect()->route('data_rumah.data_rumah')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tb_rumah = Rumah::find($id);

        $tb_rumah->delete();

        return redirect()->route('data_rumah.data_rumah')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $tb_rumah = Rumah::where('nama_perumahan', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $tb_rumah = Rumah::all();
        }

        return view('dashboard.admin.kegiatan.kegiatan', compact('event'));
    }
}
