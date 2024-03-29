@extends('dashboard.pengelola.layouts.main')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title">Tambah Data Fasilitas</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group mb-3 mt-3">
                        <label class="form-label mb-3"><b>Nama Fasilitas</b></label>
                        <select name="name_fasility" class="form-select @error('name_fasility') is-invalid @enderror" name="name_fasility" value="{{ old('name_fasility') }}" autofocus>
                            <option value="">--- pilih jenis fasilitas ---</option><br>
                            <option value="1 Gate System">1 Gate System</option>
                            <option value="CCTV">CCTV</option>
                            <option value="Satpam">Satpam</option>
                            <option value="Musholla">Musholla</option>
                            <option value="Kolam Renang">Kolam Renang</option>
                            <option value="Taman">Taman</option>
                            <option value="RTH">RTH</option>
                          </select>
                        @error('name_fasility')
                            <div class="invalid-feedback">Silahkan masukkan Fasilitas</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 mt-3">
                        <label class="form-label mb-3"><b>Keterangan</b></label>
                        <select name="keterangan" class="form-select @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" autofocus>
                            <option value="">--- pilih jenis keterangan ---</option><br>
                            <option value="Umum">Umum</option>
                            <option value="Khusus">Khusus</option>
                          </select>
                        @error('keterangan')
                          <div class="invalid-feedback">Silahkan masukkan Keterangan</div>
                        @enderror
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit<i class="bi bi-check2-square ms-2"></i></button>
                        <a href="/fasilitas" class="btn btn-secondary mt-5">Close<i class="bi bi-x-lg ms-2"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
