<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $transaction = Transaction::latest()->paginate(3);

        return view('dashboard.pengelola.data_transaksi.data_transaksi', compact('transaction'), [
            "title" => "Transaksi"
        ]);
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
        //
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
        $transaction = Transaction::find($id);
        $image_path = public_path("gambar/{$transaction->gambar}");
        File::delete($image_path);

        $transaction->delete();

        return redirect('data_transaksi')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $transaction = Transaction::where('nama', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $transaction = Transaction::all();
        }

        return view('dashboard.pengelola.data_transaksi.data_transaksi', compact('transaction'), [
            "title" => "Transaksi"
        ]);
    }
}
