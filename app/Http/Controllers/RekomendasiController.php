<?php

namespace App\Http\Controllers;

use App\Models\Crips;
use App\Models\Rumah;
use App\Models\Bobot;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $harga = $request->harga;
        // return $request->luas_bangunan;

        $rumah = Rumah::get();
        $fasilitasinput = $request->input('fasilitas');

        // for ($i=0; $i < count($fasilitasinput) ; $i++) {
        //     $cari_bobot = Crips::where("nama_crips", $fasilitasinput[$i])->pluck('bobot');
        //     array_push($arr,$cari_bobot[0] );
        // }

        foreach ($rumah as $key => $value) {
            $bobotHarga = Crips::where('nama_crips', $value->rentang_harga)->pluck('bobot');
            $bobotLuasTanah = Crips::where('nama_crips', $value->rentang_luas_tanah)->pluck('bobot');
            $bobotLuasBangunan = Crips::where('nama_crips', $value->rentang_luas_bangunan)->pluck('bobot');

            $rumah[$key]['bobot_harga'] =  $bobotHarga[0];
            $rumah[$key]['bobot_luastanah'] =  $bobotLuasTanah[0];
            $rumah[$key]['bobot_luasbangunan'] =  $bobotLuasBangunan[0];

        }

        // return $rumah;
        $harga = array();
        $luas_tanah = array();
        $luas_bangunan = array();
        $fasilitas = array();

        foreach($rumah as $key => $value){
            array_push($harga, $value->bobot_harga);
            array_push($luas_tanah, $value->bobot_luastanah);
            array_push($luas_bangunan, $value->bobot_luasbangunan);
            array_push($fasilitas, $value->bobot_fasilitas);
        }

        $min_value_harga = min($harga);
        $max_value_luastanah = max($luas_tanah);
        $max_value_luasbangunan = max($luas_bangunan);
        $max_value_fasilitas = max($fasilitas);

        // return $fasilitas;
        foreach ($rumah as $key => $value) {
            // $normalisasi_harga = $min_value_harga/$value->bobot_harga;
            // $normalisasi_luastanah = $value->bobot_luastanah/$max_value_luastanah;
            // $normalisasi_luasbangunan = $value->bobot_luasbangunan/$max_value_luasbangunan;
            // $normalisasi_fasilitas = $value->bobot_fasilitas/$max_value_fasilitas;

            $normalisasi_harga = $min_value_harga/$request->harga;
            $normalisasi_luastanah = $request->luas_tanah/$max_value_luastanah;
            $normalisasi_luasbangunan = $request->luas_bangunan/$max_value_luasbangunan;
            $normalisasi_fasilitas = array_sum($fasilitasinput)/$max_value_fasilitas;

            $rumah[$key]['normalisasi_harga'] = $normalisasi_harga;
            $rumah[$key]['normalisasi_luastanah'] = $normalisasi_luastanah;
            $rumah[$key]['normalisasi_luasbangunan'] = $normalisasi_luasbangunan;
            $rumah[$key]['normalisasi_fasilitas'] = $normalisasi_fasilitas;
        }

        $bobot_kriteria_harga = Bobot::where('name_kriteria', "Harga")->pluck('bobot');
        $bobot_kriteria_luastanah = Bobot::where('name_kriteria', "Luas Tanah")->pluck('bobot');
        $bobot_kriteria_luasbangunan = Bobot::where('name_kriteria', "Luas Bangunan")->pluck('bobot');
        $bobot_kriteria_fasilitas = Bobot::where('name_kriteria', "Fasilitas")->pluck('bobot');


        foreach ($rumah as $key => $value) {
            $jumlah = ($value->normalisasi_harga*$bobot_kriteria_harga[0]) + ($value->normalisasi_luastanah*$bobot_kriteria_luastanah[0]) + ($value->normalisasi_luasbangunan*$bobot_kriteria_luasbangunan[0]) + ($value->normalisasi_fasilitas*$bobot_kriteria_fasilitas[0]);
            $rumah[$key]['total_bobot'] = $jumlah;
        }

        // return $rumah;
        $hasil =  $rumah->sortByDesc('total_bobot');

        return view('sirekomendasi.rekomendasi.hasil', [
            'hasil' => $hasil,
            "title" => "Berita"
        ]);

        // return $request->fasilitas;
        // return $request->all();
        // $fasilitasinput = $request->input('fasilitas');
        // $fasilitas = implode(', ', $fasilitasinput);

        // // $image = $request->file('gambar');
        // // $new_image = rand().'.'.$image->getClientOriginalExtension();

        // $data = array(
        //     'harga' => $request->harga,
        //     'luas_tanah' => $request->luas_tanah,
        //     'luas_bangunan' => $request->luas_bangunan,
        //     'fasilitas' => $fasilitas,
        //     // 'gambar' => $new_image,
        // );

        // $image->move(public_path('gambar'), $new_image);

        // Crips::create($data);

        // return redirect('hasil')->with('toast_success', 'Data berhasil ditambahkan');
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
    public function update(Request $request, $id)
    {
        //
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
}
