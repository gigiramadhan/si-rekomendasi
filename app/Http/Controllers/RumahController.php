<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $rumah = Rumah::latest()->paginate(3);

        return view('dashboard.admin.data_rumah.data_rumah', compact('rumah'), [
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
        return view('dashboard.admin.data_rumah.create', [
            "title" => "Tambah Data Rumah"
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

        Rumah::create($data);

        return redirect('data_rumah')->with('toast_success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Rumah::find($id);
        // dd($data);
        return view('dashboard.admin.data_rumah.showrumah', compact('data'), [
            "title" => "Detail Rumah"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilrumah($id){

        $data = Rumah::find($id);
        // dd($data);
        // dd($data->fasilitas);
        $fasilitas = explode(', ', $data->fasilitas);
        // dd($fasilitas);
        return view('dashboard.admin.data_rumah.tampilrumah', compact('data'), [
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
    public function updaterumah(Request $request, $id){

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
        // dd($request->input('fasilitas'));
        // dd($data);
        // dd($facility);

        $data = Rumah::find($id);
        // $data->update($request->all());

        $data->update(array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $hasil,
            'gambar' => $gambar
        ));

        return redirect('data_rumah')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumah = Rumah::find($id);
        $image_path = public_path("gambar/{$rumah->gambar}");
        File::delete($image_path);

        $rumah->delete();

        return redirect('data_rumah')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $rumah = Rumah::where('nama_perumahan', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $rumah = Rumah::all();
        }

        return view('dashboard.admin.data_rumah.data_rumah', compact('rumah'), [
            "title" => "Data Rumah"
        ]);
    }
}
