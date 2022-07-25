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
        $request_harga = $request->harga;
        $request_luas_tanah = $request->luas_tanah;
        $request_luas_bangunan = $request->luas_bangunan;
        $request_fasilitas =array_sum($request->fasilitas);
        $request_jenis = $request->nama_perumahan;

        $rumah = Rumah::get()->all();
        $fasilitasinput = $request->input('fasilitas');

        // for ($i=0; $i < count($fasilitasinput) ; $i++) {
        //     $cari_bobot = Crips::where("nama_crips", $fasilitasinput[$i])->pluck('bobot');
        //     array_push($arr,$cari_bobot[0] );
        // }

        foreach ($rumah as $key => $value) {
            $cari_bobot_harga = Crips::where('nama_crips', $value->rentang_harga)->pluck('bobot');
            $cari_bobot_luas_tanah = Crips::where('nama_crips', $value->rentang_luas_tanah)->pluck('bobot');
            $cari_bobot_luas_bangunan = Crips::where('nama_crips', $value->rentang_luas_bangunan)->pluck('bobot');

            $rumah[$key]['bobot_harga'] =  $cari_bobot_harga[0];
            $rumah[$key]['bobot_luastanah'] =  $cari_bobot_luas_tanah[0];
            $rumah[$key]['bobot_luasbangunan'] =  $cari_bobot_luas_bangunan[0];

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
        array_push($harga, $request_harga);
        array_push($luas_tanah, $request_luas_tanah);
        array_push($luas_bangunan, $request_luas_bangunan);
        array_push($fasilitas, $request_fasilitas);

        $min_value_harga = min($harga);
        $max_value_luastanah = max($luas_tanah);
        $max_value_luasbangunan = max($luas_bangunan);
        $max_value_fasilitas = max($fasilitas);
        // dd($luas_bangunan);

        foreach ($rumah as $key => $value) {
            // $normalisasi_harga = $min_value_harga/$value->bobot_harga;
            // $normalisasi_luastanah = $value->bobot_luastanah/$max_value_luastanah;
            // $normalisasi_luasbangunan = $value->bobot_luasbangunan/$max_value_luasbangunan;
            // $normalisasi_fasilitas = $value->bobot_fasilitas/$max_value_fasilitas;

            // $normalisasi_harga = $min_value_harga/$value->bobot_harga;
            // $normalisasi_luastanah = $value->bobot_luastanah/$max_value_luastanah;
            // $normalisasi_luasbangunan = $value->bobot_luasbangunan/$max_value_luasbangunan;
            // $normalisasi_fasilitas = array_sum($fasilitasinput)/$max_value_fasilitas;

            $normalisasi_harga = $min_value_harga/$request_harga;
            $normalisasi_luastanah = $request_luas_tanah/$max_value_luastanah;
            $normalisasi_luasbangunan = $request_luas_bangunan/$max_value_luasbangunan;
            $normalisasi_fasilitas = $request_fasilitas/$max_value_fasilitas;

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

        $selected_key = 0;
        foreach($rumah as $key => $value){
            if ($rumah[$key]['total_bobot'] >= 0.3 && $rumah[$key]['total_bobot'] <= 0.8 && $request_jenis == 'Cluster Sultan Regency'){
                // $hasil = $rumah[$key]->where('nama_perumahan');
                $hasil = $rumah[$key]['total_bobot'];

                dd($hasil);
                // return view('sirekomendasi.rekomendasi.hasil', [
                //     'hasil' => $hasil,
                //     "title" => "Hasil Rekomendasi"
                // ]);

            }elseif($rumah[$key]['total_bobot'] >= 0.8 && $request_jenis == 'Cluster Sultan Regency'){
                $hasil = $rumah[$key]['total_bobot'];

                dd($hasil);
            }elseif($rumah[$key]['total_bobot'] >= 0.3 && $rumah[$key]['total_bobot'] <= 0.6 && $request_jenis == 'Sultan Estate'){

                $hasil = $rumah[$key];

                return view('sirekomendasi.rekomendasi.hasil', [
                    'hasil' => $hasil,
                    "title" => "Hasil Rekomendasi"
                ]);

            } elseif($rumah[$key]['total_bobot'] >= 0.3 && $rumah[$key]['total_bobot'] <= 0.6 && $request_jenis == 'Sultan Estate'){

                $hasil = $rumah[$key];

                return view('sirekomendasi.rekomendasi.hasil', [
                    'hasil' => $hasil,
                    "title" => "Hasil Rekomendasi"
                ]);

            } elseif($rumah[$key]['total_bobot'] >= 0.3 &&  $rumah[$key]['total_bobot'] <= 0.8 && $request_jenis == 'Pesona Citra Residence'){

                $hasil = $rumah[$key];

                return view('sirekomendasi.rekomendasi.hasil', [
                    'hasil' => $hasil,
                    "title" => "Hasil Rekomendasi"
                ]);

            } elseif($rumah[$key]['total_bobot'] >= 0.3 && $rumah[$key]['total_bobot'] <= 0.6 && $request_jenis == 'Pesona Citra Residence'){

                $hasil = $rumah[$key];

                return view('sirekomendasi.rekomendasi.hasil', [
                    'hasil' => $hasil,
                    "title" => "Hasil Rekomendasi"
                ]);

            } else {
                $selected_key = $key;
            }
        }
        $hasil =  $rumah[$selected_key];
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
