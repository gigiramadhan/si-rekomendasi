@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Kegiatan</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control mt-3" value="{{ old('judul') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="deskripsi" class="fw-bold">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi">
                        <trix-editor input="deskripsi" value="{{ old('deskripsi') }}"></trix-editor>
                    </div>

                    <div class="form-group mb-3 mt-4 fw-bold">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" class="form-control-file mt-3" name="gambar" value="{{ old('gambar') }}" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <a href="/kegiatan" class="btn btn-secondary mt-5">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    <style>
        document.addEventListener('trix-file-accept', function(e) {
            e.prevenDefault();
        })
    </style>
</script>
@endsection
