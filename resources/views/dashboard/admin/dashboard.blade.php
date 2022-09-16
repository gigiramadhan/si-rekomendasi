@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
        <div class="pagetitle ms-2">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
    @endsection

    @section('content')
        @if(Session::has('success'))
            <div class="alert alert-primary alert-dismissible fade show ms-2" role="alert">
                {{Session::get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <div class="row mb-4">
        <div class="col-xxl-4 col-md-3 mt-4">
            <div class="card info-card sales-card ms-2">
                <div class="card-body">
                    <h5 class="card-title">Data Rumah</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        <div class="ps-1">
                            <h6 class="ms-4">{{ $rumah }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_rumah')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-3 mt-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Administrator</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ps-1">
                            <h6 class="ms-4">{{ $admin }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_admin')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-3 mt-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Pengelola Rumah</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ps-1">
                            <h6 class="ms-4">{{ $pengelola }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_pengelola')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-3 mt-4">
            <div class="card info-card sales-card me-2">
                <div class="card-body">
                    <h5 class="card-title">Pengunjung</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ps-1">
                            <h6 class="ms-4">{{ $pengunjung }}</h6>
                            <span class="text-success small pt-1"><a href="{{url('data_user')}}"><u>View Details</u><i class="bi bi-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

