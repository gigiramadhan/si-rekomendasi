@extends('dashboard.admin.layouts.main')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="page-title">Tambah Data Berita</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('berita.store') }}" method="POST" class="needs-validation"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3 mt-3">
                            <label for="judul"><b>Judul</b></label>
                            <input type="text" name="judul"
                                class="form-control mt-3 @error('judul') is-invalid @enderror" value="{{ old('judul') }}"
                                autofocus>
                            @error('judul')
                                <div class="invalid-feedback">Silahkan masukkan Judul Berita</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label for="deskripsi" class="fw-bold">Deskripsi</label>
                            <input id="deskripsi" type="hidden" name="deskripsi">
                            <trix-editor input="deskripsi" value="{{ old('deskripsi') }}"></trix-editor>
                        </div>

                        <div class="form-group mb-3 mt-4">
                            <label for="gambar"><b>Gambar</b></label><br>
                            <input type="file" class="form-control-file mt-3 @error('gambar') is-invalid @enderror"
                                name="gambar" value="{{ old('gambar') }}" autofocus>
                            @error('gambar')
                                <div class="invalid-feedback">Silahkan masukkan Gambar</div>
                            @enderror
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary mt-5">Submit<i
                                    class="bi bi-check2-square ms-2"></i></button>
                            <a href="/berita" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        < style >
            document.addEventListener('trix-file-accept', function(e) {
                e.prevenDefault();
            }) <
            /style>
    </script>
@endsection
