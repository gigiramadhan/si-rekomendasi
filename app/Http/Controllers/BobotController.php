<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Crips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $bobot = Bobot::latest()->get();

        return view('dashboard.admin.bobot.bobot', compact('bobot'), [
            "title" => "Kriteria"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.bobot.create', [
            "title" => "Tambah Kriteria"
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
            'name_kriteria' => 'required',
            'attribut' => 'required',
            'bobot' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/bobot/create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'name_kriteria' => $request->name_kriteria,
            'attribut' => $request->attribut,
            'bobot' => $request->bobot,
        ];

        Bobot::create($data);

        return redirect('bobot')->with('toast_success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bobot::find($id);
        // dd($data);
        $crips = Crips::where('id_kriteria', $id)->latest()->paginate(7);
        // $crips = Crips::latest()->get();
        // dd($crips);
        return view('dashboard.admin.crips.crips', compact('data', 'crips'), [
            "title" => "Detail Crips"
        ]);
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

        return view('dashboard.admin.bobot.tampilbobot', compact('data'), [
            "title" => "Edit Kriteria"
        ]);
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

        return redirect('bobot')->with('toast_success', 'Data berhasil diupdate');
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

        return redirect('bobot')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $bobot = Bobot::where('name_kriteria', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $bobot = Bobot::all();
        }

        return view('dashboard.admin.bobot.bobot', compact('bobot'), [
            "title" => "Kriteria"
        ]);
    }
}
