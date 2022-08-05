@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Kriteria</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('bobot.store') }}" method="post">
                @csrf

                    <div class="form-group mb-3 mt-3">
                        <label class="form-label mb-3"><b>Kriteria</b></label>
                        <select name="name_kriteria" class="form-select @error('name_kriteria') is-invalid @enderror" name="name_kriteria" value="{{ old('name_kriteria') }}" autofocus>
                            <option value="">--- pilih jenis attribut ---</option><br>
                            <option value="Harga">Harga</option>
                            <option value="Luas Tanah">Luas Tanah</option>
                            <option value="Luas Bangunan">Luas Bangunan</option>
                            <option value="Fasilitas">Fasilitas</option>
                        </select>
                        @error('name_kriteria')
                            <div class="invalid-feedback">Silahkan masukkan Kriteria</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label class="form-label mb-3"><b>Atribut</b></label>
                        <select name="attribut" class="form-select @error('attribut') is-invalid @enderror" name="attribut" value="{{ old('attribut') }}" autofocus>
                            <option value="">--- pilih jenis attribut ---</option><br>
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                          </select>
                        @error('attribut')
                            <div class="invalid-feedback">Silahkan masukkan Attribut</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="bobot"><b>Bobot</b></label>
                        <input type="text" name="bobot" class="form-control mt-3 @error('bobot') is-invalid @enderror" name="bobot" value="{{ old('bobot') }}" autofocus>
                        @error('bobot')
                            <div class="invalid-feedback">Silahkan masukkan Bobot</div>
                        @enderror
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit<i class="bi bi-check2-square ms-2"></i></button>
                        <a href="/bobot" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
