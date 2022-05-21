@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="container mt-2">
                <div class="card">
                    <div class="bg-white p-3 text-secondary bg-opacity-25">
                        <h5 class="fw-bold">Hai Admin, Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan!!!</h5>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('content')
    <div class="row mb-4">
        <div class="col-xxl-4 col-md-3">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Data Rumah</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        <div class="ps-2">
                            <h6>{{ $rumah }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_rumah')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-3">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Administrator</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ps-2">
                            <h6>{{ $admin }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_pengguna')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-3">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Pengelola Rumah</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ps-2">
                            <h6>{{ $pengelola }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_pengguna')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-3">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Pengunjung</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ps-2">
                            <h6>{{ $pengunjung }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_pengguna')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

