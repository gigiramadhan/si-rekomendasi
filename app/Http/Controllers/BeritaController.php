<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
// use DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::latest()->get();

        return view('dashboard.admin.berita.berita', compact('berita'), [
            "title" => "Berita"
        ]);
    }

    public function berita()
    {
        $berita = Berita::take(3)->get()->sortByDesc('created_at');

        return view('sirekomendasi.home.berita_user', [
            'berita' => $berita,
            "title" => "Berita"
        ]);
    }

    public function home_berita()
    {
        $berita = Berita::take(3)->get()->sortByDesc('created_at');

        return view('home.home_berita', [
            'berita' => $berita,
            "title" => "Berita"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.berita.create', [
            "title" => "Tambah Berita"
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg',
        ]);

        if ($validator->fails()) {
            return redirect('/berita/create')
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data = array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $new_image,
        );

        $image->move(public_path('gambar'), $new_image);

        $data['kutipan'] = Str::limit(strip_tags($request->deskripsi), 50);

        Berita::create($data);

        return redirect('berita')->with('toast_success', 'Data berhasil ditambahkan');
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
    public function tampildata($id)
    {
        $data = Berita::find($id);

        return view('dashboard.admin.berita.tampildata', compact('data'), [
            "title" => "Edit Berita"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatedata(Request $request, $id)
    {
        $image_lama = $request->old_image;
        $image_baru = $request->file('gambar');

        if($image_baru == ''){
            $gambar = $image_lama;

        }else{
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path('gambar'), $new_image);
        }

        $data = Berita::find($id);

        $data->update(array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ));

        return redirect('berita')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $image_path = public_path("gambar/{$berita->gambar}");
        File::delete($image_path);

        $berita->delete();

        return redirect('berita')->with('toast_success', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $data = Berita::findOrFail($id);

        return view('landing.detail_berita', compact('data'), [
            "title" => "Detail Berita"
        ])->with([
            'data' => $data
        ]);
    }
}
