<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $rumah;
    public $pengguna;
    public $pengelola;
    public $pengunjung;


    public function index()
    {
        // $pengguna = User::count();
        // $rumah = Rumah::count();

        $rumah = DB::table('tb_rumah')->count();
        // $pengguna = DB::table('users')->count();
        $admin = DB::table('users')->where('level', '=', 'admin')->count();
        $pengelola = DB::table('users')->where('level', '=', 'pengelola')->count();
        $pengunjung = DB::table('users')->where('level', '=', 'user')->count();

        // return view('dashboard', compact('pengguna','rumah'));
        return view('dashboard.admin.dashboard', ['rumah'=>$rumah, 'admin'=>$admin, 'pengelola'=>$pengelola, 'pengunjung'=>$pengunjung, "title" => "Dashboard"]);

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
        //
    }
}
