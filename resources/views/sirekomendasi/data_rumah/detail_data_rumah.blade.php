@extends('sirekomendasi.layouts.main')
@section('content')

<section id="data_rumah" class="data_rumah">
    <div class="container">
        <div class="row g-0 mt-4">
            {{-- <div class="card mb-4 mt-4"> --}}
                <div class="card-body">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        {{-- <div class="row g-0"> --}}
                            <div class="col-sm-6">
                                <div class="card mb-3">
                                    <img src="{{ URL::to('/') }}/gambar/{{ $data->gambar }}" class="card-img-top" alt="..." width="200px" height="400px">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $data->type }}</h5><br>
                                        <p class="card-text">{{ $data->nama_perumahan }}</p>
                                        <p class="card-text">Rp. {{ number_format($data->harga) }}</p>
                                        <p>
                                            <i class="bi bi-check-circle me-2"></i>{{ $data->fasilitas }}
                                        <p>
                                        <p class="card-text">{{ $data->alamat }}</p>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</section>
@endsection
