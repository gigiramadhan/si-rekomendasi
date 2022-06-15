@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
        <div class="pagetitle ms-2">
        <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="container mt-4">
                <div class="card ms-2 me-2">
                    <div class="bg-white p-3 text-secondary bg-opacity-25">
                        <h5 class="fw-bold">Selamat Datang di Sistem Rekomendasi Pemilihan Perumahan</h5>
                    </div>
                </div>
            </div>
        </div

    @endsection

