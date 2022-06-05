@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Edit Bobot</h4>
            </div>

            <div class="card-body">
                <form action="/updatebobot/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="name_kriteria">Nama Kriteria</label>
                        <input type="text" name="name_kriteria" class="form-control mt-3" value="{{ $data->name_kriteria }}">
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Attribut</label>
                        <select name="attribut" class="form-select" aria-label="Default select example">
                            <option selected>{{ $data->attribut }}</option><br>
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                        </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="bobot">Bobot</label>
                        <input type="number" min="0" name="bobot" class="form-control mt-3" value="{{ $data->bobot }}">
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-success mt-5">Update<i class="bi bi-arrow-repeat ms-2"></i></button>
                        <a href="/bobot" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
