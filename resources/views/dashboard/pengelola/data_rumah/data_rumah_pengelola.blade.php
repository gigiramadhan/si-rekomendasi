@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle ms-3">
        <h1>Data Rumah</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Data Rumah</li>
                </ol>
            </nav>
    </div>

    <section class="section datarumah_pengelola">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-3 ms-3">
            <a href="{{ route('data_rumah_pengelola.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped mt-2 ms-2">
                    <thead class="thead-light">
                        <tr>
                            <th style="text-align: center" width='15%'>No</th>
                            <th style="text-align: center" width='15%'>Type</th>
                            <th style="text-align: center" width='15%'>Harga</th>
                            <th style="text-align: center">Gambar</th>
                            <th style="text-align: center" width='18%'>Tanggal Pembuatan</th>
                            <th style="text-align: center" width='18%'>Tanggal Perubahan</th>
                            <th style="text-align: center">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @if ($rumah != null)
                            @foreach ($rumah  as $index => $item)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td style="text-align: center"><img src="{{ URL::to('/') }}/gambar/{{ $item->gambar }}" width="130px"></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>

                                    <td>
                                        <form class="d-flex justify-content-center gap-2" action="{{ route('data_rumah_pengelola.destroy', $item->id) }}" method="get">
                                            <a href="/data_rumah_pengelola/showrumahpengelola/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                            <a href="/data_rumah_pengelola/tampilrumahpengelola/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('get')
                                            <button type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
