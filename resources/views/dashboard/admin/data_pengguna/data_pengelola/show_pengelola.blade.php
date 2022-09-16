@extends('dashboard.admin.layouts.main')

@section('breadcrumb')
<div class="pagetitle">
    <h1>Data Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
        </nav>
</div>

    <div class="row">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header mb-4 ms-2">
                    <h1 class="page-title text-secondary">Data Pengelola</h1>
                </div>

                <div class="container">
                    <div class="card">
                        <div class="bg-info p-4 text-primary bg-opacity-25">
                            <h6 class="fw-bold">Informasi Lengkap Data Pengelola</h6>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <table class="table table-striped mt-4">
                                    <tbody>
                                        <tr>
                                            <th style="width: 30%">Nama</th>
                                            <td>{{ $data->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>{{ $data->username }}</td>
                                        </tr>
                                        <tr>
                                            <th>Level</th>
                                            <td>{{ $data->level }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $data->email }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href="/data_pengelola" class="btn btn-secondary mt-5 mb-4 ms-4"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
