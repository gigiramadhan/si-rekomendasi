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

        {{-- @if (\Session::has('berhasil'))
            <div class="alert alert-success">
                <p>{{ \Session::get('berhasil') }}</p>
            </div>
        @endif --}}

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-3 ms-3">
            <a href="{{ route('data_pengelola.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>

            {{-- <form action="/pengguna/search" class="form-inline" method="GET">
                <div class="input-group">
                    <form action="/search" class="form-inline" method="GET"></form>
                    <input type="search" name="search" class="form-control" placeholder="search here.....">
                    <span class="input-group-prepend me-3">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form> --}}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped mt-2 ms-2">
                    <thead class="thead-light">
                    {{-- <table class="table table-striped table-hover">
                    <thead> --}}
                        <tr>
                            <th style="text-align: center" width='10%'>No</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center" width='18%'>Username</th>
                            <th style="text-align: center" width='12%'>Level</th>
                            <th style="text-align: center">Email</th>
                            {{-- <th>Password</th> --}}
                            <th style="text-align: center">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @if ($pengelola != null)
                            @foreach ($pengelola as $index => $item)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td style="text-align: left">{{ $item->name }}</td>
                                <td style="text-align: left">{{ $item->username }}</td>
                                <td style="text-align: left">{{ $item->level }}</td>
                                <td style="text-align: left">{{ $item->email }}</td>
                                {{-- <td style="text-align: left">{{ $item->password }}</td> --}}

                                <td>
                                    <form class="d-flex justify-content-center gap-2" action="{{ route('data_pengelola.destroy', $item->id) }}" method="get">
                                        {{-- @if($item->level == 'admin'|| $item->level == 'pengelola') --}}
                                            <a href="/data_pengelola/show_pengelola/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                            <a href="/data_pengelola/tampil_pengelola/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        {{-- @endif --}}
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

            {{-- <div class="form-group d-flex justify-content-between mt-3">
                <div>
                    Showing
                    {{ $pengelola->firstItem() }}
                    to
                    {{ $pengelola->lastItem() }}
                    of
                    {{ $pengelola->total() }}
                    entries
                </div>

                <div class="pull-right">
                    {{ $pengelola->links() }}
                </div>
            </div> --}}
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
