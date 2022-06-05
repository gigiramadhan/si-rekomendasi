@extends('sirekomendasi.layouts.main')

<section class="section">
    <div class="container">
        <div class="col-lg-8 col-md-6">
            <div class="row mt-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="text-secondary fw-bold">Profile Details</h5>
                        {{-- <h5 class="card-title mt-2">Profile Details</h5> --}}
                        <form action="{{ route('updateprofileuser', $user->id) }}" method="POST" enctype="multipart/form-data">
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

                                <div class="row mt-4 mb-3">
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
                                    <a href="/rekomendasi" class="btn btn-outline-secondary ms-4">Close<i class="bi bi-x-lg ms-2"></i></a>
                                </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="text-secondary fw-bold">Change Password</h5>
                            <form action="{{ route('ubah_password', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row mt-4 mb-3">
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
    </div>
</section>
@include('sweetalert::alert')
