@extends('dashboard.admin.layouts.main')

    @section('content')
    <div class="page-header">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="page-title">Tambah Data Crips</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('crips.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group mb-3 mt-3">
                            <label class="form-label mb-3"><b>Nama Crips</b></label>
                            <input type="text" value="{{ $id }}" name="id_kriteria" hidden>
                            <input type="text" name="nama_crips" class="form-control @error('nama_crips') is-invalid @enderror" name="nama_crips" placeholder="Masukkan nama Crips" value="{{ old('nama_crips') }}" autofocus>
                            @error('nama_crips')
                                <div class="invalid-feedback">Silahkan masukkan Nama Crips</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label class="form-label mb-3"><b>Bobot</b></label>
                            <select name="bobot" class="form-select @error('bobot') is-invalid @enderror" name="bobot" value="{{ old('bobot') }}" autofocus>
                                <option value="">--- pilih bobot ---</option><br>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                            @error('bobot')
                                <div class="invalid-feedback">Silahkan masukkan Bobot</div>
                            @enderror
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary mt-5">Submit<i class="bi bi-check2-square ms-2"></i></button>
                            <a href="/showbobot/{{ $id }}" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
