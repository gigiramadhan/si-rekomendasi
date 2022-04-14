<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $event = Event::paginate(3);

        return view('dashboard.admin.kegiatan.kegiatan', ['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.kegiatan.create');
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

        Event::create($data);

        return redirect()->route('kegiatan.kegiatan')->with('berhasil', 'Data Kegiatan telah berhasil ditambahkan');
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

        $data = Event::find($id);
        // dd($data);

        return view('dashboard.admin.kegiatan.tampilkegiatan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateevent(Request $request, $id){

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

        $data = Event::find($id);

        // $data->update($request->all());

        $data->update(array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ));

        return redirect()->route('kegiatan.kegiatan')->with('berhasil', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect()->route('kegiatan.kegiatan')->with('berhasil', 'Data berhasil dihapus');
    }

    public function search(Request $request){

        if($request->has('search')){
            $event = Event::where('judul', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $event = Event::all();
        }

        return view('dashboard.admin.kegiatan.kegiatan', compact('event'));
    }


}
