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
                                </div>
                            </div>

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
