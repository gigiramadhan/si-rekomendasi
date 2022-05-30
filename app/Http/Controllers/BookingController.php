<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $booking = Booking::latest()->paginate(2);

        return view('dashboard.pengelola.data_booking.data_booking', compact('booking'), [
            "title" => "Data Booking"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sirekomendasi.booking.create', [
            "title" => "Booking"
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
        $image = $request->file('upload_booking');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data = array(
            'name_booking' => $request->name_booking,
            'no_telp' => $request->no_telp,
            'date_booking' => $request->date_booking,
            'upload_booking' => $new_image,
            // 'status_booking' => $request->status_booking
        );

        $image->move(public_path('gambar'), $new_image);

        Booking::create($data);

        return redirect('rekomendasi')->with('toast_success', 'Data berhasil disimpan');
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
    public function updatebooking(Request $request, $id)
    {
        $data = Booking::find($id);
        // $data->update($request->all());

        $data->update(['status_booking' => $request->status_booking]);

        return redirect('data_booking')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $image_path = public_path("gambar/{$booking->gambar}");
        File::delete($image_path);

        $booking->delete();

        return redirect('data_booking')->with('toast_success', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $booking = Booking::where('name_booking', 'LIKE', '%'.$request->search.'%')->paginate();
        }
        else{
            $booking = Booking::all();
        }

        return view('dashboard.pengelola.data_booking.data_booking', compact('booking'), [
            "title" => "Data Booking"
        ]);
    }
}
