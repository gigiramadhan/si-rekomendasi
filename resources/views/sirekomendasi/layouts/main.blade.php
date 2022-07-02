<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }} | SIREKPERUM</title>
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

<body>

    {{-- Header --}}
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a><span>SIREKPERUM</span></a></h1>
            </div>

            @if (Request::is('rekomendasi', 'data_rumah_user', 'berita_user', 'kegiatan_user', 'profile_user') ? 'active' : '')
                @include('sirekomendasi.layouts.navbar')
            @endif

        </div>
    </header>
    @yield('content')


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

