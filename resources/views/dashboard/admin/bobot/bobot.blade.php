@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle ms-3">
        <h1>Kriteria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Kriteria</li>
                </ol>
            </nav>
    </div>

    <section class="section bobot">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-3 ms-3">
            <a href="{{ route('bobot.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Kriteria</a>
        </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatable table-striped mt-2 ms-2">
                        <thead class="thead-light">
                            <tr>
                                <th style="text-align: center" width='10%'>No</th>
                                <th style="text-align: center">Nama Kriteria</th>
                                <th style="text-align: center">Attribut</th>
                                <th style="text-align: center">Bobot</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @foreach ($bobot as $index => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name_kriteria }}</td>
                                <td>{{ $item->attribut }}</td>
                                <td>{{ $item->bobot }}</td>

                                <td>
                                    <form class="d-flex justify-content-center gap-2" action="{{ route('bobot.destroy', $item->id) }}" method="get">
                                        <a href="/showbobot/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                        <a href="/bobot/tampilbobot/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        @csrf
                                        @method('get')
                                        <button type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div>
            </div>
        </div>
    @include('sweetalert::alert')
@endsection

