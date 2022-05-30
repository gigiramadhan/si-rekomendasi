@extends('sirekomendasi.layouts.main')

<section id="status" class="status">
    <div class="container">
        <div class="row mt-4">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <div class="section-title text-center">
                        <p>Status Booking</p>
                    </div>

                    <table class="table table-hover table-bordered border-secondary mt-4">
                        <thead class="thead-light">
                            <tr>
                                <th style="text-align: center">No</th>
                                <th style="text-align: center">Nama</th>
                                <th style="text-align: center">No Handphone</th>
                                <th style="text-align: center">Tanggal Booking</th>
                                <th style="text-align: center">Bukti Booking</th>
                                <th style="text-align: center">Status</th>
                                </tr>
                        </thead>
                        <tbody>
                            @php
                                $increment = 1;
                            @endphp
                            @if ($status != null)
                                @foreach ($status as $index => $item)
                                    <tr>
                                        <td style="text-align: center">{{ $index + $status->firstItem() }}</td>
                                        <td style="text-align: center">{{ $item->name_booking }}</td>
                                        <td style="text-align: center">{{ $item->no_telp }}</td>
                                        <td style="text-align: center">{{ $item->date_booking }}</td>
                                        <td style="text-align: center"><img src="{{ URL::to('/') }}/gambar/{{ $item->upload_booking }}" width="130px"></td>
                                        <td style="text-align: center">
                                            @if ($item->status_booking == '0')
                                                <button class="btn btn-secondary rounded-pill btn-sm" value="0" name="status_booking">Menunggu</button>
                                            @elseif ($item->status_booking == '1')
                                                <button class="btn btn-primary rounded-pill btn-sm" value="1" name="status_booking">Di terima</button>
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

                    <div class="form-group d-flex justify-content-between">
                        <div>
                            Showing
                            {{ $status->firstItem() }}
                            to
                            {{ $status->lastItem() }}
                            of
                            {{ $status->total() }}
                            entries
                        </div>

                        <div class="pull-right">
                            {{ $status->links() }}
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-md-start mt-2">
                        <a href="/rekomendasi" class="btn btn-secondary rounded-pill mt-2"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


