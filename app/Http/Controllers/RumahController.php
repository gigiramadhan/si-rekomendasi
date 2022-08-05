<?php

namespace App\Http\Controllers;

use App\Models\Crips;
use App\Models\Rumah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        // $rumah = Rumah::latest()->paginate(4);
        $rumah = Rumah::latest()->get();
        return view('dashboard.admin.data_rumah.data_rumah', compact('rumah'), [
            "title" => "Data Rumah"
        ]);
    }

    public function data_rumah(){

        $rumah = Rumah::all();
        return view('sirekomendasi.data_rumah.data_rumah_user', compact('rumah'), [
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
        $validator = Validator::make($request->all(),[
            'type' => 'required',
            'nama_perumahan' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'stok' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/data_rumah/create')
                ->withErrors($validator)
                ->withInput();
        }

        $fasilitasinput = $request->input('fasilitas');
        $request_harga = $request->harga;
        $request_luas_bangunan = $request->luas_bangunan;
        $request_luas_tanah = $request->luas_tanah;

        $arr = array();
        for ($i=0; $i < count($fasilitasinput) ; $i++) {
            $cari_bobot = Crips::where("nama_crips", $fasilitasinput[$i])->pluck('bobot');
            array_push($arr,$cari_bobot[0] );
        }

        $fasilitas = implode(',', $fasilitasinput);
        $arr_fas = implode(',', $arr);
        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        if ($request_harga <= 200000000) {
            $rentang_harga = "<= 200000000";
        }elseif($request_harga > 200000000 && $request_harga <= 300000000){
            $rentang_harga = "> 200000000 <= 300000000";
        }elseif($request_harga > 300000000 && $request_harga <= 400000000){
            $rentang_harga = "> 300000000 <= 400000000";
        }elseif($request_harga > 400000000 && $request_harga <= 500000000){
            $rentang_harga = "> 400000000 <= 500000000";
        }elseif($request_harga > 500000000 && $request_harga <= 600000000){
            $rentang_harga = "> 500000000 <= 600000000";
        }else if($request_harga > 600000000){
            $rentang_harga = "> 600000000";
        }

        if ($request_luas_bangunan <= 30) {
            $rentang_luasbangunan = "<= 30";
        }else if($request_luas_bangunan > 30 && $request_luas_bangunan <= 40){
            $rentang_luasbangunan = "> 30 <= 40";
        }else if($request_luas_bangunan > 40 && $request_luas_bangunan <= 50){
            $rentang_luasbangunan = "> 40 <= 50";
        }else if($request_luas_bangunan > 50){
            $rentang_luasbangunan = "> 50";
        }

        if ($request_luas_tanah <= 80) {
            $rentang_luas_tanah = "<= 80";
        }elseif($request_luas_tanah > 80 && $request_luas_tanah <= 100){
            $rentang_luas_tanah = "> 80 <= 100";
        }elseif($request_luas_tanah > 100 && $request_luas_tanah <= 120){
            $rentang_luas_tanah = "> 100 <= 120";
        }elseif($request_luas_tanah > 120 && $request_luas_tanah <= 140){
            $rentang_luas_tanah = "> 120 <= 140";
        }else if($request_luas_tanah > 140){
            $rentang_luas_tanah = "> 140";
        }

        // return $rentang_luas_tanah;

        $data = array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $fasilitas,
            'stok' => $request->stok,
            'gambar' => $new_image,
            'rentang_harga' => $rentang_harga,
            'rentang_luas_bangunan' => $rentang_luasbangunan,
            'rentang_luas_tanah' => $rentang_luas_tanah,
            'bobot_fasilitas' => array_sum($arr),
        );

        $image->move(public_path('gambar'), $new_image);

        Rumah::create($data);


        // $ex = explode(",", $fasilitasinput);

        // if ($fasilitasinput == "") {
        //     $image = $request->file('gambar');
        //     $new_image = rand().'.'.$image->getClientOriginalExtension();
        //     $data = array(
        //         'type' => $request->type,
        //         'nama_perumahan' => $request->nama_perumahan,
        //         'alamat' => $request->alamat,
        //         'harga' => $request->harga,
        //         'fasilitas' => $fasilitasinput,
        //         'gambar' => $new_image,
        //     );
        // }else {
        //     $fasilitas = implode(',', $fasilitasinput);

        //     $image = $request->file('gambar');
        //     $new_image = rand().'.'.$image->getClientOriginalExtension();

        //     $data = array(
        //         'type' => $request->type,
        //         'nama_perumahan' => $request->nama_perumahan,
        //         'alamat' => $request->alamat,
        //         'harga' => $request->harga,
        //         'fasilitas' => $fasilitas,
        //         'gambar' => $new_image,
        //     );
        // }


        // $image->move(public_path('gambar'), $new_image);

        // Rumah::create($data);

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

        $fasilitas = explode(', ', $data->fasilitas);

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

        $data = Rumah::find($id);
        // $data->update($request->all());

        $data->update(array(
            'type' => $request->type,
            'nama_perumahan' => $request->nama_perumahan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'fasilitas' => $hasil,
            'stok' => $request->stok,
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
