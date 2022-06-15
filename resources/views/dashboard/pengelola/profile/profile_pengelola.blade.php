@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle ms-2">
        <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
    </div>

        {{-- <div class="form-group d-flex justify-content-between mt-3">
            <a href="{{ url('dashboard') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-arrow-left"></i>Kembali</a>
        </div> --}}

    <div class="row">
        <div class="container mt-4">
            <div class="card ms-2">
                <div class="card-body">
                    <h5 class="card-title">Profile Details</h5>
                    <form action="{{ route('update_profile_pengelola', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf

                        {{-- <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label text-primary">Profile Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="{{asset('adashboard')}}/assets/img/profile.png" class="img-thumbnail" width="130px" alt="Profile">
                                <div class="pt-2">
                                    <input class="btn btn-outline-primary btn-sm" type="file">
                                    <button type="submit" class="btn btn-outline-primary">Reset</button>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mt-2 mb-3">
                            <label for="name" class="col-md-4 col-lg-3 col-form-label text-primary">Nama</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="name" type="name" class="form-control" id="name" value="{{ auth()->user()->name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-lg-3 col-form-label text-primary">Username</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="username" type="username" class="form-control" id="username" value="{{ auth()->user()->username }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="level" class="col-md-4 col-lg-3 col-form-label text-primary">Level</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="level" type="level" class="form-control" id="level" value="{{ auth()->user()->level }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-lg-3 col-form-label text-primary">Email</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="email" type="email" class="form-control" id="email" value="{{ auth()->user()->email }}">
                            </div>
                        </div>

                        <div class="d-md-flex justify-content-md-end mt-4">
                            <button type="submit" class="btn btn-outline-primary">Update<i class="bi bi-arrow-repeat ms-2"></i></button>
                            <a href="/dashboard_pengelola" class="btn btn-outline-secondary ms-4">Close<i class="bi bi-x-lg ms-2"></i></a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card ms-2">
                <div class="card-body">
                    <h5 class="card-title">Change Password</h5>
                        <form action="{{ route('ubah_password_pengelola', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row mt-2 mb-3">
                                <label for="password_lama" class="col-md-4 col-lg-3 col-form-label text-primary">Password Lama</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password_lama" type="password" class="form-control" id="password_lama">
                                        @error('password_lama')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        {!! session('gagal') !!}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password_baru" class="col-md-4 col-lg-3 col-form-label text-primary">Password Baru</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password_baru" type="password" class="form-control" id="password_baru">
                                        @error('password_baru')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password_baru_confirmation" class="col-md-4 col-lg-3 col-form-label text-primary">Konfirmasi Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password_baru_confirmation" type="password" class="form-control" id="password_baru_confirmation">
                                        @error('password_baru_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>

                            <div class="d-md-flex justify-content-md-end mt-4">
                                <button type="submit" class="btn btn-outline-primary">Save Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @include('sweetalert::alert')
    @endsection
