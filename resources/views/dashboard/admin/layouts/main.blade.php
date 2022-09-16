<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }} | SIREKPERUM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('adashboard') }}/assets/img/landgroup.png" rel="icon">
    <link href="{{ asset('adashboard') }}/assets/img/landgroup.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('adashboard') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('adashboard') }}/assets/css/style.css" rel="stylesheet">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('adashboard') }}/assets/css/trix.css">
    <script type="text/javascript" src="{{ asset('adashboard') }}/assets/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    @include('dashboard.admin.layouts.navbar')

    <!-- ======= Sidebar ======= -->
    @include('dashboard.admin.layouts.sidebar')

    <main id="main" class="main">
        <div class="pagetitle">
            @yield('breadcrumb')
        </div>

        <section class="section dashboard">
            @yield('content')
        </section>
    </main>

    <!-- Vendor JS Files -->
    <script src="{{ asset('adashboard') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('adashboard') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('adashboard') }}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{ asset('adashboard') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('adashboard') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('adashboard') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('adashboard') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('adashboard') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('adashboard') }}/assets/js/main.js"></script>

</body>

    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright 2021-2022 | <strong><span class="text-secondary">Land Group Indramayu.</span></strong>
        </div>
    </footer>

</html>
