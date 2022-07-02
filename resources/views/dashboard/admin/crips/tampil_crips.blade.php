@extends('dashboard.admin.layouts.main')

    @section('content')
    <div class="page-header">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="page-title">Edit Crips</h4>
                </div>

                <div class="card-body">
                    <form action="/updatecrips/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Nama Crips</label>
                        <input type="text" value="{{ $data->id_kriteria }}" name="id_kriteria" hidden>
                        {{-- <select name="id_kriteria" class="form-select" aria-label="Default select example" value="{{ $id }}" hidden></select> --}}
                        <input type="text" name="nama_crips" class="form-control" value="{{ $data->nama_crips }}">
                    </div>

                        <div class="form-group mb-3 mt-3 fw-bold">
                            <label class="form-label mb-3">Bobot</label>
                            <select name="bobot" class="form-select" aria-label="Default select example">
                                <option selected>{{ $data->bobot }}</option><br>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-success mt-5">Update<i class="bi bi-arrow-repeat ms-2"></i></button>
                            <a href="/showbobot/{{ $data->id_kriteria }}" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
