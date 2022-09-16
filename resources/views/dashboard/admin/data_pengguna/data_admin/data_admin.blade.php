@extends('dashboard.admin.layouts.main')

    {{-- <div class="alert alert-danger">
        <ul>
            @foreach ($eror->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}

@section('breadcrumb')
<div class="pagetitle ms-3">
    <h1>Data Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
        </nav>
</div>

<section class="section data_pengguna">
    @yield('content')
</section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-3 ms-3">
            <a href="{{ route('data_admin.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped mt-2 ms-2">
                    <thead class="thead-light">
                        <tr>
                            <th style="text-align: center" width='10%'>No</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center" width='18%'>Username</th>
                            <th style="text-align: center" width='13%'>Level</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @if ($admin != null)
                            @foreach ($admin as $index => $item)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td style="text-align: left">{{ $item->name }}</td>
                                <td style="text-align: left">{{ $item->username }}</td>
                                <td style="text-align: left">{{ $item->level }}</td>
                                <td style="text-align: left">{{ $item->email }}</td>

                                <td>
                                    <form class="d-flex justify-content-center gap-2" action="{{ route('data_admin.destroy', $item->id) }}" method="get">
                                        @if($item->level == 'admin'|| $item->level == 'pengelola')
                                            <a href="/data_admin/show/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                            <a href="/data_admin/tampiladmin/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        @endif
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
            <div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
