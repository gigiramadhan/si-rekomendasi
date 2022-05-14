@extends('dashboard.admin.layouts.main')

    {{-- <div class="alert alert-danger">
        <ul>
            @foreach ($eror->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}

@section('breadcrumb')
<div class="pagetitle">
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
        <div class="col-md-6 mt-4">
            <h1>Data Pengguna</h1>
        </div>

        <div class="form-group d-flex justify-content-between mt-3">
            <a href="{{ route('data_pengguna.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg"></i>Tambah Data</a>

            <form action="/pengguna/search" class="form-inline" method="GET">
                <div class="input-group">
                    {{-- <form action="/search" class="form-inline" method="GET"></form> --}}
                    <input type="search" name="search" class="form-control" placeholder="search here.....">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>

        <div class="crad-body">
            <table class="table table-hover table-bordered border-secondary mt-3">
                <thead class="thead-light">
                {{-- <table class="table table-striped table-hover">
                <thead> --}}
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Username</th>
                        <th style="text-align: center">Level</th>
                        <th style="text-align: center">Email</th>
                        {{-- <th>Password</th> --}}
                        <th style="text-align: center">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    @php
                    $increment = 1;
                    @endphp
                    @if ($pengguna != null)
                        @foreach ($pengguna as $index => $item)
                        <tr>
                            <td style="text-align: center">{{ $index + $pengguna->firstItem() }}</td>
                            <td style="text-align: left">{{ $item->name }}</td>
                            <td style="text-align: left">{{ $item->username }}</td>
                            <td style="text-align: left">{{ $item->level }}</td>
                            <td style="text-align: left">{{ $item->email }}</td>
                            {{-- <td style="text-align: left">{{ $item->password }}</td> --}}

                            <td>
                                <form class="d-flex justify-content-center gap-2" action="{{ route('data_pengguna.destroy', $item->id) }}" method="get">
                                    <a href="/show/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                    <a href="/tampiluser/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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

            <div class="form-group d-flex justify-content-between mt-3">
                <div>
                    Showing
                    {{ $pengguna->firstItem() }}
                    to
                    {{ $pengguna->lastItem() }}
                    of
                    {{ $pengguna->total() }}
                    entries
                </div>

                <div class="pull-right">
                    {{ $pengguna->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
