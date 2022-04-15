<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $data['bobot'] = Bobot::paginate(1);
        return view('dashboard.admin.bobot.bobot', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.bobot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'fasilitas' => $request->fasilitas,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'harga' => $request->harga,

        ];

        Bobot::create($data);

        return redirect()->route('bobot.bobot')->with('toast_success', 'Data berhasil ditambahkan');
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
    public function tampilbobot($id)
    {
        $data = Bobot::find($id);
        // dd($data);

        return view('dashboard.admin.bobot.tampilbobot', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebobot(Request $request, $id)
    {
        $data = Bobot::find($id);
        $data->update($request->all());

        return redirect()->route('bobot.bobot')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bobot = Bobot::find($id);

        $bobot->delete();

        return redirect()->route('bobot.bobot')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $bobot = Bobot::where('fasilitas', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $bobot = Bobot::all();
        }

        return view('dashboard.admin.bobot.bobot', compact('bobot'));
    }
}
