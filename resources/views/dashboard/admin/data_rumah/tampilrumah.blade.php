@extends('dashboard.admin.layouts.main')

@section('content')

<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Edit Data Rumah</h4>
            </div>

            <div class="card-body">
                <form action="/updaterumah/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_image" value="{{ $data->gambar}}">

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label class="form-label mb-3">Type Rumah</label>
                    <select name="type" class="form-select" aria-label="Default select example">
                        <option selected>{{ $data->type }}</option><br>
                        <option value="Type Aster (40/72)">Type Aster (40/72)</option>
                        <option value="Type Alamanda (48/88)">Type Alamanda (48/88)</option>
                        <option value="Type Azalela (48/98)">Type Azalela (48/98)</option>
                        <option value="Type Estate(48/98)">Type (48/98)</option>
                        <option value="Type Hook (48/126)">Type Hook (48/126)</option>
                        <option value="Type Sultan Essence (48/98)">Type Sultan Essence (48/98)</option>
                        <option value="Type Sultan Essence Hook (48/140)">Type Sultan Essence Hook (48/140)</option>
                    </select>
                </div>

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label class="form-label mb-3">Nama Perumahan</label>
                    <select name="nama_perumahan" class="form-select" aria-label="Default select example">
                        <option selected>{{ $data->nama_perumahan }}</option><br>
                        <option value="Cluster Sultan Regency">Cluster Sultan Regency</option>
                        <option value="Sultan Estate">Sultan Estate</option>
                        <option value="Pesona Citra Residence">Pesona Citra Residence</option>
                    </select>
                </div>

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control mt-3" value="{{ $data->alamat }}">
                </div>

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control mt-3" value="{{ $data->harga }}">
                </div>

                <div class="form-group mb-3 mt-3 fw-bold">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control mt-3" value="{{ $data->stok }}">
                </div>

                <div class="row mb-3 mt-3">
                    <label class="form-label mb-3 fw-bold" for="fasilitas">Fasilitas</label>
                    <div class="ms-4">
                        <div class="form-check">
                            <input name="fasilitas[]" class="form-check-input" type="checkbox" value="1 Gate System"
                                @foreach ($fasilitas as $value)
                                    @if ($value == '1 Gate System')
                                        checked
                                    @endif
                                @endforeach>
                            <label class="form-check-label" for="fasilitas">1 Gate System</label>
                        </div>
                        <div class="form-check">
                            <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Satpam"
                                @foreach ($fasilitas as $value)
                                    @if ($value == 'Satpam')
                                        checked
                                    @endif
                                @endforeach>
                            <label class="form-check-label" for="fasilitas">Satpam</label>
                        </div>
                        <div class="form-check">
                            <input name="fasilitas[]" class="form-check-input" type="checkbox" value="CCTV"
                                @foreach ($fasilitas as $value)
                                    @if ($value == 'CCTV')
                                        checked
                                    @endif
                                @endforeach>
                            <label class="form-check-label" for="fasilitas">CCTV</label>
                        </div>
                        <div class="form-check">
                            <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Musholla"
                                @foreach ($fasilitas as $value)
                                    @if ($value == 'Musholla')
                                        checked
                                    @endif
                                @endforeach>
                            <label class="form-check-label" for="fasilitas">Musholla</label>
                        </div>
                        <div class="form-check">
                            <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Kolam Renang"
                                @foreach ($fasilitas as $value)
                                    @if ($value == 'Kolam Renang')
                                        checked
                                    @endif
                                @endforeach>
                            <label class="form-check-label" for="fasilitas">Kolam Renang</label>
                        </div>
                        <div class="form-check">
                            <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Taman"
                                @foreach ($fasilitas as $value)
                                    @if ($value == 'Taman')
                                        checked
                                    @endif
                                @endforeach>
                            <label class="form-check-label" for="fasilitas">Taman</label>
                        </div>
                        <div class="form-check">
                            <input name="fasilitas[]" class="form-check-input" type="checkbox" value="RTH"
                                @foreach ($fasilitas as $value)
                                    @if ($value == 'RTH')
                                        checked
                                    @endif
                                @endforeach>
                            <label class="form-check-label" for="fasilitas">RTH</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3 mt-4 fw-bold">
                    <label for="gambar">Gambar</label><br>
                    <input type="file" class="form-control-file mt-3" name="gambar"><br>
                    <img src="{{ URL::to('/') }}/gambar/{{ $data->gambar }}" class="img-thumbnail" width="200px"/>
                    <input type="hidden" class="form-control-file mt-3" name="old_image" value="{{ $data->gambar }}">
                </div>

                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-success mt-5">Update<i class="bi bi-arrow-repeat ms-2"></i></button>
                    <a href="/data_rumah" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

