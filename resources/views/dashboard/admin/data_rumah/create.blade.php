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
                        <label class="form-label mb-3">Type Rumah</label>
                        <select name="type" class="form-select" aria-label="Default select example">
                            <option value="">--- pilih type rumah ---</option><br>
                            <option value="Type Aster (40/72)">Type Aster (40/72)</option>
                            <option value="Type Alamanda (48/88)">Type Alamanda (48/88)</option>
                            <option value="Type Azalela (48/98)">Type Azalela (48/98)</option>
                            <option value="Type Estate(48/98)">Type (48/98)</option>
                            <option value="Type Hook (48/126)">Type Hook (48/126)</option>
                            <option value="Type Sultan Essence (48/98)">Type Sultan Essence (48/98)</option>
                            <option value="Type Sultan Essence Hook (48/140)">Type Sultan Essence Hook (48/140)</option>
                            <option value="Type Hook (36/88)">Type Hook (36/88)</option>
                            <option value="Type 36 (36/66)">Type 36 (36/66)</option>
                            <option value="Type Ruko 2 LT (98/72)">Type Ruko 2 LT (98/72)</option>
                          </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Nama Perumahan</label>
                        <select name="nama_perumahan" class="form-select" aria-label="Default select example">
                            <option value="">--- pilih jenis perumahan ---</option><br>
                            <option value="Cluster Sultan Regency">Cluster Sultan Regency</option>
                            <option value="Sultan Estate">Sultan Estate</option>
                            <option value="Pesona Citra Residence">Pesona Citra Residence</option>
                          </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="luas_bangunan">Luas Bangunan</label>
                        <input type="text" name="luas_bangunan" class="form-control mt-3 @error('luas_bangunan') is-invalid @enderror" name="luas_bangunan" placeholder="Masukkan Luas Bangunan" value="{{ old('luas_bangunan') }}" autofocus>
                        @error('luas_bangunan')
                            <div class="invalid-feedback">Silahkan masukkan Luas Bangunan</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label for="luas_tanah">Luas Tanah</label>
                        <input type="text" name="luas_tanah" class="form-control mt-3 @error('luas_tanah') is-invalid @enderror" name="luas_tanah" placeholder="Masukkan Luas Tanah" value="{{ old('luas_tanah') }}" autofocus>
                        @error('luas_tanah')
                            <div class="invalid-feedback">Silahkan masukkan Luas Tanah</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="alamat"><b>Alamat</b></label>
                        <textarea name="alamat" class="form-control mt-3 @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autofocus></textarea>
                        @error('alamat')
                            <div class="invalid-feedback">Silahkan masukkan Alamat Perumahan</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="harga"><b>Harga</b></label>
                        <input type="text" name="harga" class="form-control mt-3 @error('harga') is-invalid @enderror" name="harga" placeholder="RP. xxx" value="{{ old('harga') }}" autofocus>
                        @error('harga')
                            <div class="invalid-feedback">Silahkan masukkan Harga Rumah</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label for="stok"><b>Stok</b></label>
                        <input type="text" name="stok" class="form-control mt-3 @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}" autofocus>
                        @error('stok')
                            <div class="invalid-feedback">Silahkan masukkan Stok Rumah</div>
                        @enderror
                    </div>

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

                    <div class="form-group mb-3 mt-4 fw-bold">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" class="form-control-file mt-3 @error('gambar') is-invalid @enderror" name="gambar" placeholder="RP. xxx" value="{{ old('gambar') }}" autofocus>
                        @error('gambar')
                            <div class="invalid-feedback">Silahkan masukkan Gambar</div>
                        @enderror
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit<i class="bi bi-check2-square ms-2"></i></button>
                        <a href="/data_rumah" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
