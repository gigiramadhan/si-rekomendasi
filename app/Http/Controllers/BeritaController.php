<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
// use DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $berita = Berita::latest()->paginate(2);

        return view('dashboard.admin.berita.berita', compact('berita'), [
            "title" => "Berita"
        ]);
    }

    // public function fetchAll(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Berita::latest()->get();
    //         return Datatables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('deskripsi', function($row){
    //                     $deskripsi = '{!! $row->deskripsi !!}';
    //                     return $deskripsi;
    //                 })
    //                 ->addColumn('gambar', function($row){
    //                     return '<img src="gambar/'.$row->gambar.' " width="130px">';
    //                 })
    //                 ->addColumn('action', function($row){
    //                     // dd($row->id);
    //                        $btn = '<td>
    //                        <form class="d-flex justify-content-center gap-2" action="berita/destroy/'.$row->id.'" method="get">';
    //                            $btn .= '<a href="/berita/tampildata/'.$row->id.'" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>';
    //                         //    $btn .='{!! @csrf !!}';
    //                            $btn .= '<button type="submit" onclick="" class="btn deleteIcon btn-danger"><i class="bi bi-trash"></i></button>
    //                        </form></td>';

    //                         return $btn;
    //                 })
    //                 ->rawColumns(['deskripsi','gambar','action'])
    //                 ->make(true);
    //     }
    // }
    public function berita(){

        $berita = Berita::take(3)->get()->sortByDesc('created_at');

        return view('sirekomendasi.home.berita_user', [
            'berita' => $berita,
            "title" => "Berita"
        ]);
    }

    public function home_berita(){

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
    public function tampildata($id){

        $data = Berita::find($id);
        // dd($data);

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

    public function search(Request $request)
    {
        if($request->has('search')){
            $berita = Berita::where('judul', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $berita = Berita::all();
        }

        return view('dashboard.admin.berita.berita', compact('berita'), [
            "title" => "Berita"
        ]);
    }

    public function detail($id){

        $data = Berita::findOrFail($id);
        // dd($data);

        return view('landing.detail_berita', compact('data'), [
            "title" => "Detail Berita"
        ])->with([
            'data' => $data
        ]);
    }
}
