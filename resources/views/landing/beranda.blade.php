<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIREKPERUM | LAND GROUP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('landing')}}/assets/img/landgroup.png" rel="icon">
  <link href="{{asset('landing')}}/assets/img/landgroup.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="styleshet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

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

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a><span>SIREKPERUM</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      @include('home.layouts.navbar')
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-5 order-2 order-lg-2 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h1>Welcome to Sistem Rekomendasi Pemilihan Perumahan</h1>
                    <h2>Visionary Masterpieces Patriot Sayma Land (Cluster Sultan Regency, Sultan Estate, and Pesona Citra Residence).</h2>
                    <div class="text-center text-lg-start">
                        <a href="{{url('login')}}" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{asset('landing')}}/assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Sirekperum</h2>
                    <p>Apa itu Sirekperum?</p>
            </div>
            <p style="text-align: justify">SiRekPerum merupakan Sistem Rekomendasi Perumahan pada Land Group yang terdiri dari Cluster Sultan Regency,
                Sultan Estate, dan Citra Pesona Residence. SiRekPerum dapat membantu dan memudahkan calon pembeli dalam memilih rumah yang diinginkan.
                Graha Land Group merupakan sebuah kompleks komersial dan hunian terpadu, yang menghadirkan berbagai sarana dan prasarana untuk menjawab kebutuhan masyarakat di Kabupaten Indramayu.
                </p>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-right">
                    <img src="{{asset('landing')}}/assets/img/about.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h5>Visionary Masterpieces PATRIOT SAYMA LAND (Land Group)</h5>
                    <p>
                        Salah satu perusahaan yang bergerak pada bidang properti di Kabupaten Indramayu yaitu PT. Patriot Sayma
                        Land (Land Group) merupakan perusa- <br> aan yang bergerak dibidang properti seperti rumah dan ruko. Graha Land
                        Group merupakan sebuah kompleks komersial dan hunian terpadu, yang menghadirkan berbagai sarana dan prasarana
                        kebutuhan masyarakat di Kabupaten Indramayu.
                        <br> Graha Land Group terletak di Jalan Tambak (Pertigaan antara Jl. Pahlawan dengan Jl. Samsu). Project Land Group diantaranya:

                    <ul>
                        <li class="fst-italic"><i class="bi bi-check-circle"></i> Cluster Sultan Regency.</li>
                        <li class="fst-italic"><i class="bi bi-check-circle"></i> Sultan Estate.</li>
                        <li class="fst-italic"><i class="bi bi-check-circle"></i> Pesona Citra Residence.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Info Section ======= -->
    <section id="info" class="info">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Information</h2>
                    <p>Information in our Land Group</p>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="slide slide-1">
                    <div class="slide-content">
                        <h1>Event</h1>
                            <p>sitikah merupakan kegiatan rutin yang dilakukan setiap satu minggu sekali</p>
                    </div>
                </div>

                <div class="slide slide-2">
                    <div class="slide-content">
                        <h1>Event</h1>
                            <p>sitikah merupakan kegiatan rutin yang dilakukan setiap satu minggu sekali</p>
                    </div>
                </div>

                <div class="slide slide-3">
                    <div class="slide-content">
                        <h1>Event</h1>
                            <p>sitikah merupakan kegiatan rutin yang dilakukan setiap satu minggu sekali</p>
                    </div>
                </div>
            </div>

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Owl Carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- Custom Javascript -->
        <script>
            $(document).ready(function () {
                $(".owl-carousel").owlCaraousl({
                    items:1,
                    loop:true,
                    nav:true,
                    dots:true,
                    autoplay:true
                    autoplaySpeed:1000,
                    smartSpeed:1500,
                    autoplayHoverPause:true

                });
            });
        </script>
      </section>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Land Group</p>
        </div>
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
      </section><!-- End Gallery Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contact</h2>
                <p>Contact Us</p>
        </div>

        <div class="col-xl-12 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-10 px-lg-5" data-aos="fade-left">
            <div>
                <p class="text-center">Graha Land Group merupakan sebuah kompleks komersial dan hunian terpadu, yang menghadirkan berbagai sarana dan prasarana untuk menjawab kebutuhan masyarakat di Kabupaten Indramayu.
                 “Graha Land Group bukan sekadar hunian semata. Didalamnya <br> telah disediakan sejumlah fasilitas, yang tentunya akan dibutuhkan masyarakat".</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5187305544027!2d108.3444366137863!3d-6.32675776366585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebde22bebcd3b%3A0x715793ff54ccabf!2sCluster%20Sultan%20Regency%20Indramayu!5e0!3m2!1sid!2sid!4v1647328945521!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="info-box mb-4 section-bg">
                            <div class="d-flex justify-content-center">
                                <div class="row mt-3">
                                    <i class="bi bi-geo-alt-fill bi-2x"></i>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <h3 class="text-center">Our Address</h3>
                                <p class="text-center">Jl. Tambak Raya (Pertigaan antara Jl. Pahlawan dengan Jl. Samsu)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4 section-bg">
                            <div class="d-flex justify-content-center">
                                <div class="row mt-3">
                                    <i class="bi bi-envelope-fill "></i>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <h3 class="text-center">Email Us</h3>
                                <p class="text-center">pt.patriotsaymaland@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4 section-bg">
                            <div class="d-flex justify-content-center">
                                <div class="row mt-3">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <h3 class="text-center">Call Us</h3>
                                <p class="text-center">0813 1635 0016</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section><!-- End Contact Section -->

  </main><!-- End main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 mt-3">
                <h3 class="text-center">Land Group</h3>
                <p>Visionary Masterpieces Patriot Sayma Land (Cluster Sultan Regency, Sultan Estate, and Pesona Citra Residence).</p>
            </div>
        </div>

            <div class="social-links text-center weidth=90 ">
                <a href="https://www.youtube.com/c/LandGroup/featured" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.facebook.com/pg/landgroup.indramayu/posts/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/landgroup.indramayu/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
    </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Land Group</span></strong>
            </div>
        </div>
    </footer><!-- End Footer -->
  {{-- <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        Copyright &copy; <strong><span>Gilang Ramadahan</span></strong>
      </div>
    </div>
  </footer>
  <!-- End of Footer --> --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('landing')}}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('landing')}}/assets/js/main.js"></script>

</body>

</html>
