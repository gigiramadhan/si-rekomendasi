@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Bobot</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('bobot.store') }}" method="post">
                @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="fasilitas">Fasilitas</label>
                        <input type="number" min="0" name="fasilitas" class="form-control mt-3" value="{{ old('fasilitas') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="luas_tanah">Luas Tanah</label>
                        <input type="number" min="0" name="luas_tanah" class="form-control mt-3" value="{{ old('luas_tanah') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="luas_bangunan">Luas Bangunan</label>
                        <input type="number" min="0" name="luas_bangunan" class="form-control mt-3" value="{{ old('luas_bangunan') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="harga">Harga</label>
                        <input type="number" min="0" name="harga" class="form-control mt-3" value="{{ old('harga') }}" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <a href="/bobot" class="btn btn-secondary mt-5">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
