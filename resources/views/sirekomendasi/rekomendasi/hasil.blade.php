@extends('sirekomendasi.layouts.main')

<section id="hasil" class="hasil">
    <div class="container">
        <div class="row g-0 mt-4">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <div class="table-responsive">
                    <div class="section-title text-center">
                        <p>Hasil Rekomendasi Perumahan <br> Land Group</p>
                    </div>

                    <table class="table table-hover table-bordered border-secondary mt-3">
                        <thead class="thead-light">
                            <tr>
                                <th style="text-align: center">No</th>
                                <th style="text-align: center">Gambar</th>
                                <th style="text-align: center">Type Rumah</th>
                                <th style="text-align: center">Perumahan</th>
                                <th style="text-align: center">Harga</th>
                                <th style="text-align: center">Fasilitas</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($hasil  as $item)
                            <tr>
                                 <td style="text-align: center">{{ $loop->iteration}}</td>
                                <td style="text-align: center"><img src="{{ URL::to('/') }}/gambar/{{ $item->gambar }}" width="130px"></td>
                                <td style="text-align: center">{{ $item->type }}</td>
                                <td style="text-align: center">{{ $item->nama_perumahan }}</td>
                                <td style="text-align: justify">Rp. {{ number_format($item->harga) }}</td>
                                <td style="text-align: center">{{ $item->fasilitas }}</td>
                                <td>
                                    <form class="d-flex justify-content-center gap-2 mt-2">
                                        <a href="{{ url('booking/create/'.$item->id) }}" class="btn btn-primary rounded-pill fw-bold" style="margin-bottom: 20px"><u>Booking</u></a>
                                    </form>
                                </td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                    <div class="form-group d-flex justify-content-md-start mt-4">
                        <a href="/rekomendasi" class="btn btn-secondary rounded-pill mt-2"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
