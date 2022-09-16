@extends('dashboard.admin.layouts.main')

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

        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped mt-2 ms-2">
                    <thead class="thead-light">
                        <tr>
                            <th style="text-align: center" width='10%'>No</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center">Username</th>
                            <th style="text-align: center" width='15%'>Level</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @if ($user != null)
                            @foreach ($user as $index => $item)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td style="text-align: left">{{ $item->name }}</td>
                                <td style="text-align: left">{{ $item->username }}</td>
                                <td style="text-align: left">{{ $item->level }}</td>
                                <td style="text-align: left">{{ $item->email }}</td>

                                <td>
                                    <form class="d-flex justify-content-center gap-2" action="{{ route('data_user.destroy', $item->id) }}" method="get">
                                        <a href="/data_user/show_user/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
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
