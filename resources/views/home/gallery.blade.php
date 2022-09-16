@extends('home.layouts.main')
@section('content')
@include('home.layouts.navbar')

    <section id="gallery" class="gallery">
        <div class="section-title text-center mt-3" data-aos="fade-up">
            <p>Our Galeri</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/home1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/home1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/home2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/home2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/home3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/home3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/home4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/home4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/estate3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/estate3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/estate4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/estate4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/essence1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/essence1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/sultan2.jpeg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/sultan2.jpeg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/estate1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/estate1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/estate2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/estate2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('landing')}}/assets/img/sultan1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset('landing')}}/assets/img/sultan1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
