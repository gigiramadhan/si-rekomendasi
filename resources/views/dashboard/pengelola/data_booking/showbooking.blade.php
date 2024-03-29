@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle">
        <h1>Data Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Data Booking</li>
                </ol>
            </nav>
    </div>

    <div class="row">
        <div class="container mt-2">
            <div class="card">
                <div class="card-header mb-4">
                    <h4 class="page-title text-secondary">Data Booking</h4>
                </div>

                <div class="container">
                    <div class="card">
                        <div class="bg-info p-4 text-primary bg-opacity-25">
                            <h6 class="fw-bold">Informasi Lengkap Data Booking</h6>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <table class="table table-striped mt-4">
                                    <tbody>
                                        <tr style="width: 40%">
                                            <th>Nama Lengkap</th>
                                            <td>{{ $data->name_booking }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Handphone</th>
                                            <td>{{ $data->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Type Rumah</th>
                                            <td>{{ $data->type_rumah }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status Booking</th>
                                            <td><button disabled = "disabled" class="btn btn-secondary">Selesai</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href="/data_booking" class="btn btn-secondary mt-5 mb-4 ms-4"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
