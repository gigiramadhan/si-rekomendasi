@extends('sirekomendasi.layouts.main')

<section id="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-2 d-flex justify-content-between mt-4">
                <div data-aos="zoom-out">
                    <h1>Sistem <br> Rekomendasi <br> Pemilihan Perumahan</h1>
                    <div class="text-start">
                        <h2 class="fs-6">Visionary Masterpieces Patriot Sayma Land Group (Cluster Sultan Regency, Sultan Estate, and Pesona Citra Residence).</h2>
                    </div>
                    <div class="text-center text-lg-start">
                        {{-- <a href="{{ url('/') }}" class="btn-get-started scrollto"><i class="bi bi-arrow-left me-2"></i>Kembali</a> --}}
                        <a href="{{ route('status') }}" class="btn-get-started scrollto">Cek Status Booking</a>
                    </div>
                </div>
            </div>

                {{-- <div class="row d-flex justify-content-md-end mt-3"> --}}
                    <div class="col-sm-5">
                        <div class="card">
                            <form action="{{ route('rekomendasi.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group mb-3 mt-3 fw-bold">
                                        <label for="harga" class="form-label mb-3">Harga</label>
                                        <select name="harga" class="form-select" aria-label="Default select example">
                                            <option value="">--- pilih harga ---</option>
                                            <option value="1">
                                               Rp. 1.000.000.000 sampai Rp.2.000.000.000</option>
                                            <option value="2">
                                                Rp. 2.000.000.000 sampai Rp.3.000.000.000</option>
                                            <option value="3">
                                                Rp. 3.000.000.000 sampai Rp.4.000.000.000</option>
                                            <option value="4">
                                                Rp. 4.000.000.000 sampai Rp.5.000.000.000</option>
                                            <option value="5">
                                                Rp. 5.000.000.000 sampai Rp.6.000.000.000</option>
                                            <option value="6">
                                                Rp. 6.000.000.000 ke atas</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3 mt-3 fw-bold">
                                        <label for="luas_tanah" class="form-label mb-3">Luas Tanah</label>
                                        <select name="luas_tanah" class="form-select" aria-label="Default select example">
                                            <option value="">--- pilih luas tanah ---</option>
                                            <option value="1">
                                                <= 80</option>
                                            <option value="2">
                                                > 80 <= 100</option>
                                            <option value="3">
                                                > 100 <= 120</option>
                                            <option value="4">
                                                > 120 <= 140</option>
                                            <option value="5">
                                                > 140</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3 mt-3 fw-bold">
                                        <label for="luas_bangunan" class="form-label mb-3">Luas Bangunan</label>
                                        <select name="luas_bangunan" class="form-select" aria-label="Default select example">
                                            <option value="">--- pilih luas bangunan ---</option>
                                            <option value="1">
                                                <= 30</option>
                                            <option value="2">
                                                > 30 <= 40</option>
                                            <option value="3">
                                                > 40 <= 50</option>
                                            <option value="4">
                                                 > 50</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3 mt-3">
                                        <label class="form-label mb-3 fw-bold" for="fasilitas">Fasilitas</label>
                                        <div class="ms-4">
                                            <div class="form-check">
                                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="1">
                                                <label class="form-check-label" for="fasilitas">1 Gate System</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="2">
                                                <label class="form-check-label" for="fasilitas">Satpam</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="3">
                                                <label class="form-check-label" for="fasilitas">CCTV</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="4">
                                                <label class="form-check-label" for="fasilitas">Musholla</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="5">
                                                <label class="form-check-label" for="fasilitas">Kolam Renang</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="6">
                                                <label class="form-check-label" for="fasilitas">Taman</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="fasilitas[]" class="form-check-input" type="checkbox" value="7">
                                                <label class="form-check-label" for="fasilitas">RTH</label>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mt-4">
                                            <button type="submit" class="btn btn-primary rounded-pill fw-bold">Cek Hasil</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                {{-- </div> --}}
        </div>
    </div>
</section>
