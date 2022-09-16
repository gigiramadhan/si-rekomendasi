@extends('sirekomendasi.layouts.main')
@section('content')

<section id="berita" class="berita">
    <div class="container">
        <div class="row g-0 mt-4">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <div class="section-title text-center" data-aos="fade-up">
                        <p>Data Rumah Land Group</p>
                    </div>

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <div class="row g-0 justify-content-center">
                            @foreach ($rumah as $item)
                            <div class="card me-4 mt-4" style="width: 18rem;">
                                <div class="" style="max-height: 218px; overflow:hidden">
                                    <img src="{{ URL::to('/') }}/gambar/{{ $item->gambar }}" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $item->type }}</h5><br>
                                    <p class="card-text">{{ $item->alamat }}</p>
                                    <p>
                                        <i class="bi bi-check-circle me-2"></i>{{ $item->fasilitas }}
                                    <p>
                                    <p class="card-text">Rp. {{ number_format($item->harga) }}</p>
                                    <span class="badge bg-secondary"><i class="bi bi-folder me-1"></i>Stok : {{ ($item->stok) }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
