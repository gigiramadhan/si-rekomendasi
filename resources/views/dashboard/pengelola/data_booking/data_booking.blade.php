@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle ms-3">
        <h1>Data Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Data Booking</li>
                </ol>
            </nav>
    </div>

    <section class="section data_booking">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped mt-2 ms-2">
                    <thead class="thead-light">
                        <tr>
                            <th style="text-align: center" width='12%'>No</th>
                            <th style="text-align: center">NIK</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center" width='22%'>No Handphone</th>
                            <th style="text-align: center">Type Rumah</th>
                            <th style="text-align: center" width='13%'>Status</th>
                            <th style="text-align: center">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @if ($booking != null)
                            @foreach ($booking as $index => $item)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration }}</td>
                                    <td style="text-align: center">{{ $item->nik }}</td>
                                    <td style="text-align: center">{{ $item->name }}</td>
                                    <td style="text-align: center">{{ $item->no_telp }}</td>
                                    <td style="text-align: center">{{ $item->type_rumah }}</td>
                                    <td style="text-align: center">
                                        @if ($item->status_booking != '0')
                                            <button disabled = "disabled" class="btn btn-secondary">Selesai</button>
                                            {{-- <button disabled = "disabled" class="btn btn-danger"><i class="bi bi-x-square"></i></button> --}}
                                        @else
                                            <form style="margin-bottom: 20px" action="/updatebooking/{{ $item->id_booking  }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('post')
                                                <input type="hidden" value="1" name="status_booking">
                                                <button type="submit" onclick="return confirm('Apakah anda yakin untuk mengubah status booking diterima?')" class="btn btn-primary"><i class="bi bi-check-square"></i></button>
                                            </form>
                                            <form style="margin-bottom: 20px" action="/updatebooking/{{ $item->id_booking  }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('post')
                                                <input type="hidden" value="2" name="status_booking">
                                                <button type="submit" onclick="return confirm('Apakah anda yakin untuk mengubah status booking ditolak?')" class="btn btn-danger"><i class="bi bi-x-square"></i></button>
                                            </form>
                                        @endif
                                    </td>

                                    <td style="text-align: center">
                                        <form class="gap-2" action="{{ route('data_booking.destroy', $item->id_booking) }}" method="get">
                                            <a href="/data_booking/showbooking/{{ $item->id_booking }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                            @csrf
                                            @method('get')
                                            <button type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
