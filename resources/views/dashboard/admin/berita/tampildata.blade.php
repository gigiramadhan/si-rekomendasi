<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Berita | SIREKPERUM</title>
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

</head>

@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Edit Data Berita</h4>
            </div>

            <div class="card-body">
                <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="old_image" value="{{ $data->gambar}}">

                <div class="form-group mb-3 mt-4 fw-bold">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control mt-3" value="{{ $data->judul }}">
                </div>

                <div class="form-group mb-3 mt-4">
                    <label for="deskripsi" class="fw-bold">Deskripsi</label>
                    <input id="deskripsi" type="hidden" name="deskripsi">
                    <trix-editor input="deskripsi" class="form-control">{!! $data->deskripsi !!}</trix-editor>
                </div>

                <div class="form-group mb-3 mt-4 fw-bold">
                    <label for="gambar">Gambar</label><br>
                    <input type="file" class="form-control-file mt-3" name="gambar"><br>
                    <img src="{{ URL::to('/') }}/gambar/{{ $data->gambar }}" class="img-thumbnail" width="200px"/>
                    <input type="hidden" class="form-control-file mt-3" name="old_image" value="{{ $data->gambar }}">
                </div>

                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-success mt-5">Update<i class="bi bi-arrow-repeat ms-2"></i></button>
                    <a href="/berita" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    <style>
        document.addEventListener('trix-file-accept', function(e) {
            e.prevenDefault();
        })
    </style>
</script>
@endsection
