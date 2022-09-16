@extends('sirekomendasi.layouts.main')

<section class="section">
    <div class="container">
        <div class="row g-0 mt-4">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <div class="section-title text-center">
                        <p>Status Booking</p>
                    </div>

                    <table class="table table-hover table-bordered border-secondary mt-4">
                        <thead class="thead-light">
                            <tr>
                                <th style="text-align: center">No</th>
                                <th style="text-align: center">Nama Lengkap</th>
                                <th style="text-align: center">NIK</th>
                                <th style="text-align: center">No Handphone</th>
                                <th style="text-align: center">Type Rumah</th>
                                <th style="text-align: center">Status</th>
                                </tr>
                        </thead>
                        <tbody>
                            @if ($status != null)
                                @foreach ($status as $index => $item)
                                    <tr>
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td style="text-align: center">{{ $item->name_booking }}</td>
                                        <td style="text-align: center">{{ auth()->user()->nik }}</td>
                                        <td style="text-align: center">{{ $item->no_telp }}</td>
                                        <td style="text-align: center">{{ $item->type_rumah }}</td>
                                        <td style="text-align: center">
                                            @if ($item->status_booking == '0')
                                                <button class="btn btn-secondary rounded-pill btn-sm" value="0" name="status_booking" data-bs-toggle="modal" data-bs-target="#exampleModal">Menunggu</button>
                                            @elseif ($item->status_booking == '1')
                                                <button class="btn btn-primary rounded-pill btn-sm" value="1" name="status_booking">Selesai</button>
                                            @elseif ($item->status_booking == '2')
                                                <button class="btn btn-danger rounded-pill btn-sm" value="2" name="status_booking">Di tolak</button>
                                            @else
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            @endif
                        </tbody>
                    </table>

                    <div class="form-group d-flex justify-content-md-start mt-2">
                        <a href="/rekomendasi" class="btn btn-secondary rounded-pill mt-2"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Berhasil disimpan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Silahkan anda, bisa langsung mengunjungi Kantor Pemasaran Land Group untuk melakukan DP Rumah.....
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>


