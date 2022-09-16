@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle ms-3">
        <h1>Fasilitas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Fasilitas</li>
                </ol>
            </nav>
    </div>

    <section class="section fasilitas">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-3 ms-3">
            <a href="{{ route('fasilitas.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped mt-2 ms-2">
                    <thead class="thead-light">
                        <tr>
                            <th style="text-align: center" width='8%'>No</th>
                            <th style="text-align: center" width='18%'>Nama Fasilitas</th>
                            <th style="text-align: center" width='15%'>Keterangan</th>
                            <th style="text-align: center" width='15%'>Tanggal Pembuatan</th>
                            <th style="text-align: center" width='15%'>Tanggal Perubahan</th>
                            <th style="text-align: center" width='10%'>Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @if ($fasilitas != null)
                            @foreach ($fasilitas  as $index => $item)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->name_fasility }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>

                                    <td>
                                        <form class="d-flex justify-content-center gap-2" action="{{ route('fasilitas.destroy', $item->id) }}" method="get">
                                            <a href="/fasilitas/showfasilitas/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                            <a href="/fasilitas/tampilfasilitas/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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


