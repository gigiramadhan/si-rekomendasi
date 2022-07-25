@extends('sirekomendasi.layouts.main')

<section id="hasil" class="hasil">
    <div class="container">
        <div class="row g-0 mt-4">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <div class="section-title text-center">
                        <p>Hasil Rekomendasi Perumahan <br> Land Group</p>
                    </div>

                    <table class="table table-hover table-bordered border-secondary mt-3">
                        <thead class="thead-light">
                            <tr>
                                {{-- <th style="text-align: center">No</th> --}}
                                <th style="text-align: center">Type Rumah</th>
                                <th style="text-align: center">Gambar</th>
                                {{-- <th style="text-align: center">Detail Fasilitas</th> --}}
                                <th style="text-align: center">Nilai Normalisasi Harga</th>
                                <th style="text-align: center">Nilai Normalisasi LB</th>
                                <th style="text-align: center">Nilai Normalisasi LT</th>
                                <th style="text-align: center">Nilai Normalisasi Fasilitas</th>
                                <th style="text-align: center">Nilai Rangking</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($hasil != null)
                                {{-- @foreach ($hasil  as $index => $item) --}}
                                    <tr>
                                        {{-- <td style="text-align: center">{{ $loop->iteration}}</td> --}}
                                        <td>{{ $hasil->type }}</td>
                                        <td><img src="{{ URL::to('/') }}/gambar/{{ $hasil->gambar }}" width="130px"></td>
                                        <td style="text-align: center">{{ $hasil->normalisasi_harga }}</td>
                                        <td style="text-align: center">{{ $hasil->normalisasi_luasbangunan }}</td>
                                        <td style="text-align: center">{{ $hasil->normalisasi_luastanah }}</td>
                                        <td style="text-align: center">{{ round($hasil->normalisasi_fasilitas, 2) }}</td>
                                        <td style="text-align: center">{{ round($hasil->total_bobot, 2) }}</td>
                                        <td>
                                            <form class="d-flex justify-content-center gap-2 mt-2">
                                                {{-- <a href="{{ route('booking.create') }}" class="btn btn-primary rounded-pill fw-bold" style="margin-bottom: 20px"><u>Booking</u></a> --}}
                                                <a href="{{ url('booking/create/'.$hasil->id) }}" class="btn btn-primary rounded-pill fw-bold" style="margin-bottom: 20px"><u>Booking</u></a>
                                                {{-- <a href="/booking" class="btn btn-primary rounded-pill fw-bold">Booking</a> --}}
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                @else
                            @endif
                        </tbody>
                    </table>
                    <div class="form-group d-flex justify-content-md-start mt-4">
                        <a href="/rekomendasi" class="btn btn-secondary rounded-pill mt-2"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
