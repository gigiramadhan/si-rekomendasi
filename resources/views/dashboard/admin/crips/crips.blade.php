@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle ms-3">
        <h1>Kriteria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Crips</li>
                </ol>
            </nav>
    </div>

    <section class="section crips">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex mt-3 ms-3">
            <a href="{{ route('crips.create', $data->id) }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>
            <div class="d-flex ms-2">
                <a href="/bobot" class="btn btn-secondary" style="margin-bottom: 20px"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
            </div>
        </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatable table-striped mt-2 ms-2">
                        <thead class="thead-light">
                            <tr>
                                <th style="text-align: center">No</th>
                                <th style="text-align: center">Nama Crips</th>
                                <th style="text-align: center">Bobot</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @foreach ($crips as $index => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_crips }}</td>
                                <td>{{ $item->bobot }}</td>

                                <td>
                                    <form class="d-flex justify-content-center gap-2" action="{{ route('crips.destroy', $item->id) }}" method="get">
                                        <a href="/tampil_crips/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        @csrf
                                        @method('get')
                                        <button type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @include('sweetalert::alert')
    @endsection

