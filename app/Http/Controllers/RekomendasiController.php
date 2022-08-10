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
        $id_c1 = 4;
        $id_c2 = 3;
        $id_c3 = 2;
        $id_c4 = 1;

        $rumahs = Rumah::get();

        $c1 = Crips::where('id_kriteria', $id_c1)->get();
        $c2 = Crips::where('id_kriteria', $id_c2)->get();
        $c3 = Crips::where('id_kriteria', $id_c3)->get();
        $c4 = Crips::where('id_kriteria', $id_c4)->get();

        $request->fasilitas = array_sum($request->fasilitas);

        foreach ($rumahs as $i => $rumah) {
            $fasilitasRumahs = explode(',', $rumah->fasilitas);
            $data['c1'][$rumah->type] = 0;
            $data['c2'][$rumah->type] = 0;
            $data['c3'][$rumah->type] = 0;
            $data['c4'][$rumah->type] = 0;

            foreach ($fasilitasRumahs as $fasilitas){
                $data['c1'][$rumah->type] += $c1->where('nama_crips', ltrim($fasilitas))->first()->bobot;
            }
            $data['c2'][$rumah->type] = $c2->where('nama_crips', $rumah->rentang_luas_bangunan)->first()->bobot;
            $data['c3'][$rumah->type] = $c3->where('nama_crips', $rumah->rentang_luas_tanah)->first()->bobot;
            $data['c4'][$rumah->type] = $c4->where('nama_crips', $rumah->rentang_harga)->first()->bobot;
        }

        $bobots = Bobot::get();
        $bobotC1 = $bobots->where('id', $id_c1)->first();
        $bobotC2 = $bobots->where('id', $id_c2)->first();
        $bobotC3 = $bobots->where('id', $id_c3)->first();
        $bobotC4 = $bobots->where('id', $id_c4)->first();

        foreach ($data['c1'] as $typeRumah => $valueCriteria) {
            if ($bobotC1->attribut == 'Benefit') $normalisasi['c1'][$typeRumah] = $valueCriteria / max($data['c1']);
            else $normalisasi['c1'][$typeRumah] = min($data['c1']) / $valueCriteria;
        }

        foreach ($data['c2'] as $typeRumah => $valueCriteria) {
            if ($bobotC2->attribut == 'Benefit') $normalisasi['c2'][$typeRumah] = $valueCriteria / max($data['c2']);
            else $normalisasi['c2'][$typeRumah] = min($data['c2']) / $valueCriteria;
        }

        foreach ($data['c3'] as $typeRumah => $valueCriteria) {
            if ($bobotC3->attribut == 'Benefit') $normalisasi['c3'][$typeRumah] = $valueCriteria / max($data['c3']);
            else $normalisasi['c3'][$typeRumah] = min($data['c3']) / $valueCriteria;
        }

        foreach ($data['c4'] as $typeRumah => $valueCriteria) {
            if ($bobotC4->attribut == 'Benefit') $normalisasi['c4'][$typeRumah] = $valueCriteria / max($data['c4']);
            else $normalisasi['c4'][$typeRumah] = min($data['c4']) / $valueCriteria;
        }

        foreach ($normalisasi as $key => $criterias){
            foreach ($criterias as $typeRumah => $valueCriteria){
                if ($key == 'c1') $requestVal = $bobotC1->bobot;
                if ($key == 'c2') $requestVal = $bobotC2->bobot;
                if ($key == 'c3') $requestVal = $bobotC3->bobot;
                if ($key == 'c4') $requestVal = $bobotC4->bobot;
                $preferensi[$key][$typeRumah] = $valueCriteria * $requestVal;

                $preferensi['hasil'][$typeRumah] = 0;
            }
        }

        foreach ($preferensi as $key => $criterias){
            foreach ($criterias as $typeRumah => $valueCriteria){
                $preferensi['hasil'][$typeRumah] += $valueCriteria;
            }
        }

        arsort($preferensi['hasil']);

        // dd($preferensi['hasil']);

        $ranking = collect($preferensi['hasil']);
        foreach ($ranking as $namaTypeRumah => $valuePreferensi) {
            $dataRumah[] = Rumah::where('type', $namaTypeRumah)->first();
        }

        return view('sirekomendasi.rekomendasi.hasil', [
            'hasil' => $dataRumah,
            "title" => "Hasil Rekomendasi"
        ]);
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
