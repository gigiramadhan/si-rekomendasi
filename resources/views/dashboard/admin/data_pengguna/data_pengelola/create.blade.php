@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Pengguna</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('data_pengelola.store') }}" method="post">
                @csrf

                    <div class="form-group mb-3 mt-3">
                        <label for="name"><b>Nama</b></label>
                        <input type="text" name="name" class="form-control mt-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                        @error('name')
                            <div class="invalid-feedback">Silahkan masukkan Nama</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="username"><b>Username</b></label>
                        <input type="text" name="username" class="form-control mt-3 @error('username') is-invalid @enderror" value="{{ old('username') }}" autofocus>
                        @error('username')
                            <div class="invalid-feedback">Silahkan masukkan Username</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Level</label>
                        <input type="text" name="level" class="form-control" value="pengelola" readonly>
                            {{-- <option selected>--- pilih jenis level ---</option><br>
                            <option value="admin">Admin</option>
                            <option value="pengelola">Pengelola</option>
                            <option value="user">User</option> --}}
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="email"><b>Email</b></label>
                        <input type="text" name="email" class="form-control mt-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>
                        @error('email')
                            <div class="invalid-feedback">Silahkan masukkan Email</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" class="form-control mt-3 @error('password') is-invalid @enderror" value="{{ old('password') }}" autofocus>
                        @error('password')
                            <div class="invalid-feedback">Silahkan masukkan Password</div>
                        @enderror
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit<i class="bi bi-check2-square ms-2"></i></button>
                        <a href="/data_pengelola" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
