<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tambah Data Rumah | SIREKPERUM</title>
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

@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Rumah</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('data_rumah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control mt-3" value="{{ old('type') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="nama_perumahan">Nama Perumahan</label>
                        <input type="text" name="nama_perumahan" class="form-control mt-3" value="{{ old('nama_perumahan') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control mt-3" value="{{ old('alamat') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control mt-3" value="{{ old('harga') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="fasilitas">Fasilitas</label>
                        <input type="text" name="fasilitas" class="form-control mt-3" value="{{ old('fasilitas') }}"></textarea>
                    </div>

                    <div class="form-group mb-3 mt-4 fw-bold">
                        <label for="gambar">Gambar</label><br>
                        {{-- <img class="rounded img-fluid" src="{{ Storage::url($item->gambar) }}" alt="gambar" id="preview"> --}}
                        <input type="file" class="form-control-file mt-3" name="gambar" value="{{ old('gambar') }}" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <a href="/data_rumah" class="btn btn-secondary mt-5">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
