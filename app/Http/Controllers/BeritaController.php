<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $data['berita'] = Berita::paginate(3);

        return view('dashboard.admin.berita.berita', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('gambarberita/', $request->file('gambar')->getClientOriginalName());
        //     $data->gambar = $request->file('gambar')->getClientOriginalName();
        //     $data->save();
        // }
        // $data = Berita::create($request->all());

        return view('dashboard.admin.berita.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = Berita::create($request->all());
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('gambarberita/', $request->file('gambar')->getClientOriginalName());
        //     $data->gambar = $request->file('gambar')->getClientOriginalName();
        //     $data->save();
        // }
        // return $request->file('gambar')->store('post-images');

        // $data = $request->all();
        // if ($request->file('gambar')){
        //     //get filename with extension
        //     $filenamewithextension = $request->file('gambar')->getClientOriginalName();

        //     //get filename without extension
        //     $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //     //get file extension
        //     $extension = $request->file('gambar')->getClientOriginalExtension();

        //     //filename to store
        //     $filenametostore = $filename.'_'.time().'.'.$extension;

        //     $data['gambar'] = $request->file('gambar')->storeAs('gambarberita', $filenametostore, 'public');
        // }

        // $request->validate([
        //     'judul' => 'required',
        //     'deskripsi' => 'required',
        //     'gambar' => '$required|image|mimes:jpeg,png,jpg'
        // ]);

        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data = array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $new_image,
        );

        $image->move(public_path('gambar'), $new_image);

        Berita::create($data);

        return redirect()->route('berita.berita')->with('toast_success', 'Data berhasil ditambahkan');
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
    // public function edit($id)
    // {
    //     $data['berita'] = Berita::find($id);

    //     return view('berita.edit', $data);
    // }

    public function tampildata($id){

        $data = Berita::find($id);
        // dd($data);

        return view('dashboard.admin.berita.tampildata', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $berita = Berita::finOrFail($id);

    //     $data = [
    //         'judul' => $request->judul,
    //         'deskripsi' => $request->deskripsi,
    //         'gambar' => $request->gambar,
    //     ];

    //     $berita->update($data);

    //     return redirect()->route('berita.berita')->with('berhasil', 'Data Berita telah berhasil diubah');
    // }

    public function updatedata(Request $request, $id){

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

        $data = Berita::find($id);

        // $data->update($request->all());

        $data->update(array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ));

        return redirect()->route('berita.berita')->with('toast_success', 'Data berhasil diupdate');
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

        $berita->delete();

        return redirect()->route('berita.berita')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $berita = Berita::where('judul', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $berita = Berita::all();
        }

        return view('dashboard.admin.berita.berita', compact('berita'));
    }
}
