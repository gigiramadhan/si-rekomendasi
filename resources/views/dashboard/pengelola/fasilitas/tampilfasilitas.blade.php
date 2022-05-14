<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Data Fasilitas | SIREKPERUM</title>
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

</head>

@extends('dashboard.pengelola.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Edit Data Fasilitas</h4>
            </div>

            <div class="card-body">
                <form action="/updatefasilitas/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label class="form-label mb-3">Nama Perumahan</label>
                    <select name="name_fasility" class="form-select" aria-label="Default select example">
                        <option selected>{{ $data->name_fasility }}</option><br>
                        <option value="1 Gate System">1 Gate System</option>
                        <option value="CCTV">CCTV</option>
                        <option value="Satpam">Satpam</option>
                        <option value="Musholla">Musholla</option>
                        <option value="Kolam Renang">Kolam Renang</option>
                        <option value="Taman">Taman</option>
                        <option value="RTH">RTH</option>
                    </select>
                </div>

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label class="form-label mb-3">Nama Perumahan</label>
                    <select name="keterangan" class="form-select" aria-label="Default select example">
                        <option selected>{{ $data->keterangan }}</option><br>
                        <option value="Umum">Umum</option>
                        <option value="Khusus">Khusus</option>
                    </select>
                </div>

                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-success mt-5">Update</button>
                    <a href="/fasilitas" class="btn btn-secondary mt-5">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
