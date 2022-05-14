@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle">
        <h1>Fasilitas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Fasilitas</li>
                </ol>
            </nav>
    </div>

    <div class="row">
        <div class="container mt-2">
            <div class="card">
                <div class="card-header mb-4">
                    <h4 class="page-title text-secondary">Fasilitas</h4>
                </div>

                <div class="container">
                    <div class="card">
                        <div class="bg-info p-4 text-primary bg-opacity-25">
                            <h6 class="fw-bold">Informasi Lengkap Fasilitas</h6>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <table class="table table-striped mt-4">
                                    <tbody>
                                        <tr>
                                            <th style="width: 40%">Nama Fasilitas</th>
                                            <td>{{ $data->name_fasility }}</td>
                                        </tr>
                                        <tr>
                                            <th>Keterangan</th>
                                            <td>{{ $data->keterangan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pembuatan</th>
                                            <td>{{ $data->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Perubahan</th>
                                            <td>{{ $data->updated_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href="/fasilitas" class="btn btn-secondary mt-5 mb-4 ms-4"><i class="bi bi-arrow-left"></i>Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
