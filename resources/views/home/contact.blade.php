<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact | SIREKPERUM</title>
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

    <section id="contact" class="contact">
        <div class="section-title text-center mt-3" data-aos="fade-up">
            <p>Contact</p>
        </div>

        <div class="col-xl-12 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-10 px-lg-5" data-aos="fade-left">
            <div>
                <p class="text-center">Graha Land Group merupakan sebuah kompleks komersial dan hunian terpadu, yang menghadirkan berbagai sarana dan prasarana untuk menjawab kebutuhan masyarakat di Kabupaten Indramayu.
                “Graha Land Group bukan sekadar hunian semata. Didalamnya telah disediakan sejumlah fasilitas, <br> yang tentunya akan dibutuhkan masyarakat,”.
                Selain ruang pertemuan yang nyaman dan representatif, ke depan, Land Group juga akan dilengkapi <br> klinik kesehatan. Dengan sarana dan prasarana modern, klinik juga didukung oleh sumber daya manusia yang profesional dan berpengalaman. <br>
                “Dengan kapasitas besar, ruang pertemuan VIP dan VVIP bisa digunakan untuk meeting maupun gathering instansi atau pun perusahaan. <br> Sedangkan untuk klinik kesehatan, akan disediakan medical check up dengan dukungan dokter-dokter spesialis, <br> asli putra-putri daerah Indramayu,”</p>
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
    </section
    @endsection
