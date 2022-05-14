@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Edit Data Rumah</h4>
            </div>

            <div class="card-body">
                <form action="/updateevent/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="old_image" value="{{ $data->gambar}}">

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control mt-3" value="{{ $data->judul }}">
                </div>

                <div class="form-group mb-3 mt-4">
                    <label for="deskripsi" class="fw-bold">Deskripsi</label>
                    <input id="deskripsi" type="hidden" name="deskripsi">
                    <trix-editor input="deskripsi" class="form-control">{!! $data->deskripsi !!}</trix-editor>
                </div>

                <div class="form-group mb-3 mt-4 fw-bold">
                    <label for="gambar">Gambar</label><br>
                    <input type="file" class="form-control-file mt-3" name="gambar"><br>
                    <img src="{{ URL::to('/') }}/gambar/{{ $data->gambar }}" class="img-thumbnail" width="200px"/>
                    <input type="hidden" class="form-control-file mt-3" name="old_image" value="{{ $data->gambar }}">
                </div>

                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-success mt-5">Update</button>
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
