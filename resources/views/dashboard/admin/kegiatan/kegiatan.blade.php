@extends('dashboard.admin.layouts.main')

@section('breadcrumb')
    <div class="pagetitle ms-3">
        <h1>Kegiatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Kegiatan</li>
            </ol>
        </nav>
    </div>

    <section class="section kegiatan">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-3 ms-3">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped mt-2 ms-2">
                    <thead class="thead-light">
                        <tr>
                            <th style="text-align: center" width='15%'>No</th>
                            <th style="text-align: center" width='15%'>Judul</th>
                            <th style="text-align: center" width='18%'>Deskripsi</th>
                            <th style="text-align: center">Gambar</th>
                            <th style="text-align: center" width='20%'>Tanggal Pembuatan</th>
                            <th style="text-align: center" width='20%'>Tanggal Perubahan</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($kegiatan != null)
                            @foreach ($kegiatan as $index => $item)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration }}</td>
                                    <td style="text-align: left">{{ $item->judul }}</td>
                                    <td style="text-align: left">{!! $item->deskripsi !!}</td>
                                    <td><img src="{{ URL::to('/') }}/gambar/{{ $item->gambar }}" width="130px"></td>
                                    <td style="text-align: left">{{ $item->created_at }}</td>
                                    <td style="text-align: left">{{ $item->updated_at }}</td>

                                    <td>
                                        <form class="d-flex justify-content-center gap-2"
                                            action="{{ route('kegiatan.destroy', $item->id) }}" method="get">
                                            <a href="/kegiatan/tampilkegiatan/{{ $item->id }}"
                                                class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('get')
                                            <button type="submit"
                                                onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"
                                                class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @endif
                    </tbody>
                </table>
                <div>
                </div>
            </div>
            @include('sweetalert::alert')
        @endsection
