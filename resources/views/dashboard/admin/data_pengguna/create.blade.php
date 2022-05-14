@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Pengguna</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('data_pengguna.store') }}" method="post">
                @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="nama">Nama</label>
                        <input type="text" name="name" class="form-control mt-3" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control mt-3" value="{{ old('username') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Level</label>
                        <select name="level" class="form-select" aria-label="Default select example">
                            <option selected>--- pilih jenis level ---</option><br>
                            <option value="admin">Admin</option>
                            <option value="pengelola">Pengelola</option>
                            <option value="user">User</option>
                          </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control mt-3" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control mt-3" value="{{ old('password') }}" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <a href="/data_pengguna" class="btn btn-secondary mt-5">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
