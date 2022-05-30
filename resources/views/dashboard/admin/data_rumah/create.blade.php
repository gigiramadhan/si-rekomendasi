@extends('dashboard.admin.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Rumah</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('data_rumah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control mt-3" value="{{ old('type') }}" required>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Nama Perumahan</label>
                        <select name="nama_perumahan" class="form-select" aria-label="Default select example">
                            <option selected>--- pilih jenis perumahan ---</option><br>
                            <option value="Cluster Sultan Regency">Cluster Sultan Regency</option>
                            <option value="Sultan Estate">Sultan Estate</option>
                            <option value="Pesona Citra Residence">Pesona Citra Residence</option>
                          </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control mt-3" value="{{ old('alamat') }}"></textarea>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control mt-3" placeholder="RP. xxx" value="{{ old('harga') }}" required>
                    </div>

                    {{-- <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Fasilitas</label>
                        <select name="fasilitas" class="form-select" aria-label="Default select example">
                            <option selected>--- pilih jenis fasilitas ---</option><br>
                            <option value="Paket 1">Paket 1</option>
                            <option value="Paket 2">Paket 2</option>
                          </select>
                    </div> --}}

                    <div class="row mb-3 mt-3">
                        <label class="form-label mb-3 fw-bold" for="fasilitas">Fasilitas</label>
                        <div class="ms-4">
                            <div class="form-check">
                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="1 Gate System">
                                <label class="form-check-label" for="fasilitas">1 Gate System</label>
                            </div>
                            <div class="form-check">
                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Satpam">
                                <label class="form-check-label" for="fasilitas">Satpam</label>
                            </div>
                            <div class="form-check">
                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="CCTV">
                                <label class="form-check-label" for="fasilitas">CCTV</label>
                            </div>
                            <div class="form-check">
                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Musholla">
                                <label class="form-check-label" for="fasilitas">Musholla</label>
                            </div>
                            <div class="form-check">
                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Kolam Renang">
                                <label class="form-check-label" for="fasilitas">Kolam Renang</label>
                            </div>
                            <div class="form-check">
                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="Taman">
                                <label class="form-check-label" for="fasilitas">Taman</label>
                            </div>
                            <div class="form-check">
                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="RTH">
                                <label class="form-check-label" for="fasilitas">RTH</label>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="fasilitas">Fasilitas</label>
                        <input type="text" name="fasilitas" class="form-control mt-3" value="{{ old('fasilitas') }}"></textarea>
                    </div> --}}

                    <div class="form-group mb-3 mt-4 fw-bold">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" class="form-control-file mt-3" name="gambar" value="{{ old('gambar') }}" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <a href="/data_rumah" class="btn btn-secondary mt-5">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
