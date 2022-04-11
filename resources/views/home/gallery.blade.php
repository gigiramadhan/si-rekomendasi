<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galery | SIREKPERUM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('landing')}}/assets/img/landgroup.png" rel="icon">
  <link href="{{asset('landing')}}/assets/img/landgroup.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landing')}}/assets/css/style.css" rel="stylesheet">

</head>

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
