<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages | Registration</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing') }}/assets/img/landgroup.png" rel="icon">
    <link href="{{ asset('landing') }}/assets/img/landgroup.png" rel="apple-touch-icon">

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

</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">SiRekPerum</span>
                                </a>
                            </div>

                            <div class="card mb-4">

                                <div class="card-body" style="width: 500px;">

                                    <div class="pt-4 pb-4 mb-4">
                                        <h5 class="card-title text-center pb-0 fs-4">Form Registration</h5>
                                    </div>

                                    <form class="row g-2 needs-validation" action="{{ route('simpanregistrasi') }}"
                                        method="post">

                                        {{-- <form action="{{url('register')}}" method="post"> --}}
                                        @method('POST')
                                        @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Name</strong>
                                            <div class="form-floating">
                                                <input type="text" name="name"
                                                    class="form-control mt-3 @error('name') is-invalid @enderror"
                                                    placeholder="Name" value="{{ old('name') }}">
                                                <label for="name">Name</label>
                                                @error('name')
                                                    <div class="invalid-feedback">Silahkan masukkan Name anda</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <strong>Username</strong>
                                            <div class="form-floating">
                                                <input type="text" name="username"
                                                    class="form-control mt-3 @error('username') is-invalid @enderror"
                                                    placeholder="Username" value="{{ old('username') }}">
                                                <label for="username">Username</label>
                                                @error('username')
                                                    <div class="invalid-feedback">Silahkan masukkan Username anda</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <strong>Pilih Sebagai</strong>
                                                <select name="level" id="level" class="form-select mt-3" aria-label="Default select example">
                                                    <option value="">--- pilih sebagai ---</option><br>
                                                    <option value="user">user</option>
                                                    <option value="pengelola">pengelola</option>
                                                </select>
                                        </div>

                                        <div class="col-md-6" id="nik_b"><br>
                                            <strong>NIK</strong>
                                            <div class="form-floating">
                                                <input type="text" name="nik"
                                                    class="form-control mt-3 @error('nik') is-invalid @enderror"
                                                    placeholder="nik" value="{{ old('nik') }}">
                                                <label for="nik">NIK</label>
                                                @error('nik')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    {{-- <div class="invalid-feedback">Silahkan masukkan NIK anda</div> --}}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                        {{-- <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" name="level" class="form-control" id="level" value="Pengguna" class="form-control"readonly>
                                                <label for="level">Level</label>
                                            </div>
                                        </div> --}}


                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <strong>Email</strong>
                                            <div class="form-floating">
                                                <input type="email" name="email"
                                                    class="form-control mt-3 @error('email') is-invalid @enderror"
                                                    placeholder="Email" value="{{ old('email') }}">
                                                <label for="email">nama@gmail.com</label>
                                                @error('email')
                                                    <div class="invalid-feedback">Silahkan masukkan Email anda</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6"><br>
                                            <strong>Password</strong>
                                            <div class="form-floating">
                                                <input type="password" name="password"
                                                    class="form-control mt-3 mb-3 @error('password') is-invalid @enderror"
                                                    placeholder="Password" value="{{ old('password') }}">
                                                <label for="password">Password</label>
                                                @error('password')
                                                    <div class="invalid-feedback">Silahkan masukkan Password anda</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-12 mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Register</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0 d-block text-center">All ready registred <a
                                                    href="{{ url('login') }}">Login</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('adashboard') }}/assets/js/main.js"></script>
    <script>
        $('#level').change(function(){
            // alert(this.value);
            if(this.value == 'pengelola')
            {
                $('#nik_b').addClass('d-none');
            }else{
                $('#nik_b').removeClass('d-none');
            }
        })
    </script>
</body>

</html>
