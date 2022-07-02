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

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Kriteria</label>
                        <select name="name_kriteria" class="form-select" aria-label="Default select example">
                            <option selected>--- pilih jenis attribut ---</option><br>
                            <option value="Harga">Harga</option>
                            <option value="Luas Tanah">Luas Tanah</option>
                            <option value="Luas Bangunan">Luas Bangunan</option>
                            <option value="Fasilitas">Fasilitas</option>
                        </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Atribut</label>
                        <select name="attribut" class="form-select" aria-label="Default select example">
                            <option selected>--- pilih jenis attribut ---</option><br>
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                          </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="bobot">Bobot</label>
                        <input type="text" name="bobot" class="form-control mt-3" value="{{ old('bobot') }}" required>
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
