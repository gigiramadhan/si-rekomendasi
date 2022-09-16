@extends('sirekomendasi.layouts.main')
@section('content')

<section id="berita" class="berita">
    <div class="container">
        <div class="row g-0 mt-4">
            <div class="card-body">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-0">
                        <div class="col-sm-6">
                            <div class="card mb-3">
                                <img src="{{ URL::to('/') }}/gambar/{{ $data->gambar }}" class="card-img-top" alt="..." width="250px" height="300px">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $data->judul }}</h5>
                                        <p class="card-text">{!! $data->deskripsi !!}</p>
                                        <p class="card-text"><small class="text-muted">{{ $data->created_at }}</small></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
