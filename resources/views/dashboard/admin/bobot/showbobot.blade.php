@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle">
        <h1>Kriteria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Data Crips</li>
                </ol>
            </nav>
    </div>

    <div class="row">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header mb-4 ms-2">
                    <h1 class="page-title text-secondary">Data Crips</h1>
                </div>

                <div class="container">
                    <div class="card">
                        <div class="bg-info p-4 text-primary bg-opacity-25">
                            <h6 class="fw-bold">Informasi Lengkap Data Crips</h6>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href="/bobot" class="btn btn-secondary mt-5 mb-4 ms-4"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
