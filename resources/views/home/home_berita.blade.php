@extends('home.layouts.main')
@section('content')
@include('home.layouts.navbar')

<section id="berita" class="berita">
    <div class="section-title text-center mt-3" data-aos="fade-up">
        <p>Information in our Land Group</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
            @foreach ($berita as $item)
            <div class="card me-4" style="width: 18rem;">
                <img src="{{ URL::to('/') }}/gambar/{{ $item->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="text-end">{{ $item->created_at }}</div><br>
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text" style="text-align: justify">{!! $item->deskripsi !!}</p>
                </div>
                <div class="text-start ms-3">
                    <a href="" class="btn btn-primary rounded-pill mt-2 mb-2">Read More<i class="bi bi-arrow-right-circle ms-2"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
