@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Edit Pengguna</h4>
            </div>

            <div class="card-body">
                <form action="/updateuser/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label mb-3">Level</label>
                        <select name="level" class="form-select" aria-label="Default select example">
                            <option selected>{{ $data->level }}</option><br>
                            <option value="admin">Admin</option>
                            <option value="pengelola">Pengelola</option>
                            <option value="user">User</option>
                          </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control mt-3" value="{{ $data->email }}">
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control mt-3" value="{{ $data->password }}">
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-success mt-5">Update</button>
                        <a href="/data_pengguna" class="btn btn-secondary mt-5">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
