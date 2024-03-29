@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Edit Data Pengelola</h4>
            </div>

            <div class="card-body">
                <form action="/updatepengelola/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control mt-3" value="{{ $data->name }}">
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control mt-3" value="{{ $data->username }}">
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="level">Level</label>
                        <input type="text" name="level" class="form-control mt-3" value="{{ $data->level }}">
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control mt-3" value="{{ $data->email }}">
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control mt-3" value="{{ $data->password }}">
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-success mt-5">Update<i class="bi bi-arrow-repeat ms-2"></i></button>
                        <a href="/data_pengelola" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
