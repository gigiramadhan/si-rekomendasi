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
                        <a href="{{ url('/') }}" class="btn-get-started scrollto"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                        <a href="{{ route('status') }}" class="btn-get-started scrollto ms-4">Cek Status Booking</a>
                    </div>
                </div>
            </div>

                {{-- <div class="row d-flex justify-content-md-end mt-3"> --}}
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-3 mt-3 fw-bold">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" class="form-control mt-3" placeholder="RP. xxx" value="{{ old('harga') }}" required>
                                </div>

                                <div class="form-group mb-3 mt-3 fw-bold">
                                    <label for="luas_tanah">Luas Tanah</label>
                                    <input type="number" name="luas_tanah" class="form-control mt-3" placeholder="Masukkan Luas Tanah" value="{{ old('luas_tanah') }}" required>
                                </div>

                                <div class="form-group mb-3 mt-3 fw-bold">
                                    <label for="luas_bangunan">Luas Bangunan</label>
                                    <input type="number" name="luas_bangunan" class="form-control mt-3" placeholder="Masukkan Luas Bangunan" value="{{ old('luas_bangunan') }}" required>
                                </div>

                                <div class="form-group mb-3 mt-3">
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

                                    <div class="d-grid gap-2 mt-4">
                                        <a href="{{ url('hasil') }}" class="btn btn-primary rounded-pill fw-bold">Cek Hasil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
        </div>
    </div>
</section>
