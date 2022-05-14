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

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Nama Fasilitas</label>
                        <select name="name_fasility" class="form-select" aria-label="Default select example">
                            <option selected>--- pilih jenis fasilitas ---</option><br>
                            <option value="1 Gate System">1 Gate System</option>
                            <option value="CCTV">CCTV</option>
                            <option value="Satpam">Satpam</option>
                            <option value="Musholla">Musholla</option>
                            <option value="Kolam Renang">Kolam Renang</option>
                            <option value="Taman">Taman</option>
                            <option value="RTH">RTH</option>
                          </select>
                    </div>

                    <div class="form-group mb-3 mt-3 fw-bold">
                        <label class="form-label mb-3">Nama Fasilitas</label>
                        <select name="keterangan" class="form-select" aria-label="Default select example">
                            <option selected>--- pilih jenis keterangan ---</option><br>
                            <option value="Umum">Umum</option>
                            <option value="Khusus">Khusus</option>
                          </select>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <a href="/fasilitas" class="btn btn-secondary mt-5">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
