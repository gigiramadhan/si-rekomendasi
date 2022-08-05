@extends('sirekomendasi.layouts.main')

<section class="section">
    <div class="container">
        <div class="row g-0 mt-4">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <div class="section-title text-center">
                        <p>Booking Rumah</p>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-4 mt-4">
                                <label for="name_booking" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="rumah_id" value="{{ $rumah->id }}" class="form-control" placeholder="Masukkan nama lengkap anda"  required>
                                    <input type="hidden" name="stok_lama" value="{{ $rumah->stok }}" class="form-control" placeholder="Masukkan nama lengkap anda"  required>
                                    <input type="text" name="name_booking" class="form-control" placeholder="Masukkan nama lengkap anda" value="{{ auth()->user()->name }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-4 mt-4">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK anda" value="{{ auth()->user()->nik }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-4 mt-4">
                                <label for="no_telp" class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="number" name="no_telp" class="form-control" placeholder="Masukkan no handphone anda" value="{{ old('no_telp') }}" required>
                                </div>
                            </div>

                            <div class="row mb-4 mt-4">
                                <label for="type_rumah" class="col-sm-2 col-form-label">Type Rumah</label>
                                <div class="col-sm-10">
                                    <input type="text" name="type_rumah" class="form-control" value="{{ $rumah->type }}" readonly>
                                    {{-- <input name="type_rumah" class="form-select" aria-label="readonly input example" value="{{ $data->type_rumah }}" readonly> --}}
                                    {{-- <select name="type_rumah" class="form-select" aria-label="Default select example"> --}}
                                        {{-- <option value="readonly" hidden selected>--- pilih type rumah ---</option><br>
                                        @foreach ($booking as $booking)
                                        <option value="{{ $booking->type_rumah }}">{{ $booking->type_rumah }}</option>
                                        @endforeach --}}
                                        {{-- <option value="Type Aster (40/72)">Type Aster (40/72)</option>
                                        <option value="Type Alamanda (48/88)">Type Alamanda (48/88)</option>
                                        <option value="Type Azalela (48/98)">Type Azalela (48/98)</option>
                                        <option value="Type Estate(48/98)">Type (48/98)</option>
                                        <option value="Type Hook (48/126)">Type Hook (48/126)</option>
                                        <option value="Type Sultan Essence (48/98)">Type Sultan Essence (48/98)</option>
                                        <option value="Type Sultan Essence Hook (48/140)">Type Sultan Essence Hook (48/140)</option>
                                        <option value="Type Hook (36/88)">Type Hook (36/88)</option>
                                    </select> --}}
                                </div>
                            </div>

                            {{-- <div class="row mb-4 mt-4">
                                <label for="date_booking" class="col-sm-2 col-form-label">Type Rumah</label>
                                <div class="col-sm-10"> --}}
                                    {{-- <input type="datetime-local" name="date_booking" class="form-control" value="{{ old('date_booking') }}" required> --}}
                                    {{-- <input type="date" name="date_booking" class="form-control" value="{{ old('date_booking') }}" required>
                                </div>
                            </div> --}}

                            {{-- <div class="row mb-4 mt-4">
                                <label for="upload_booking" class="col-sm-2 col-form-label">Upload Bukti</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="upload_booking" value="{{ old('upload_booking') }}" required>
                                </div>
                            </div> --}}

                            <div class="form-group d-flex justify-content-md-end mt-4">
                                <a href="/rekomendasi" class="btn btn-outline-secondary rounded-pill fw-bold mt-2">Close<i class="bi bi-x-lg ms-2"></i></a>
                                <button  type="submit" class="btn btn-outline-primary rounded-pill fw-bold mt-2 ms-4">Submit<i class="bi bi-check2-square ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</section>
