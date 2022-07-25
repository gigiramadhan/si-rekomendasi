<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $kegiatan = Kegiatan::latest()->get();

        return view('dashboard.admin.kegiatan.kegiatan', compact('kegiatan'), [
            "title" => "Kegiatan"
        ]);
    }

    public function kegiatan(){

        $kegiatan = Kegiatan::take(3)->get()->sortByDesc('created_at');

        return view('sirekomendasi.home.kegiatan_user', [
            'kegiatan' => $kegiatan,
            "title" => "Kegiatan"
        ]);
    }

    public function home_kegiatan(){

        $kegiatan = Kegiatan::take(3)->get()->sortByDesc('created_at');

        return view('home.home_kegiatan', [
            'kegiatan' => $kegiatan,
            "title" => "Kegiatan"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.kegiatan.create', [
            "title" => "Tambah Kegiatan"
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
        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data = array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $new_image,
        );

        $image->move(public_path('gambar'), $new_image);

        Kegiatan::create($data);

        return redirect('kegiatan')->with('toast_success', 'Data berhasil ditambahkan');
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
    public function tampilkegiatan($id){

        $data = Kegiatan::find($id);
        // dd($data);

        return view('dashboard.admin.kegiatan.tampilkegiatan', compact('data'), [
            "title" => "Edit Kegiatan"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatekegiatan(Request $request, $id){

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

        $data = Kegiatan::find($id);
        // $data->update($request->all());

        $data->update(array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ));

        return redirect('kegiatan')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $image_path = public_path("gambar/{$kegiatan->gambar}");
        File::delete($image_path);

        $kegiatan->delete();

        return redirect('kegiatan')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $kegiatan = Kegiatan::where('judul', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $kegiatan = Kegiatan::all();
        }

        return view('dashboard.admin.kegiatan.kegiatan', compact('kegiatan'), [
            "title" => "Kegiatan"
        ]);
    }


}
