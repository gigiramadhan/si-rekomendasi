<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bobot | SIREKPERUM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('adashboard') }}/assets/img/landgroup.png" rel="icon">
    <link href="{{ asset('adashboard') }}/assets/img/landgroup.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('adashboard') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('adashboard') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('adashboard') }}/assets/css/style.css" rel="stylesheet">

</head>


{{-- <body> --}}
@extends('dashboard.admin.layouts.main')

@if (session()->has('berhasil'))
    <div class="alert alert-success">
        {{ session()->get('berhasil') }}
    </div>
@endif

    @section('breadcrumb')
    <div class="pagetitle">
        <h1>Bobot</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Bobot</li>
                </ol>
            </nav>
    </div>

    <section class="section bobot">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4">
            <h1>Data Bobot</h1>
        </div>

      {{-- <div class="container mt-5"> --}}

            <div class="form-group d-flex justify-content-between mt-3">
                <a href="{{ route('bobot.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg"></i>Tambah Bobot</a>

                <form action="/search" method="GET">
                    <div class="input-group">
                        <form action="/search" class="form-inline" method="GET"></form>
                        <input type="search" name="search" class="form-control" placeholder="search here.....">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
            </div>

                <div class="crad-body">
                    <table class="myTable table table-hover table-bordered border-secondary mt-3">
                        <thead class="thead-light">
                    {{-- <table class="table table-striped table-hover">
                        <thead> --}}
                            <tr>
                                <th style="text-align: center">No</th>
                                <th style="text-align: center">Fasilitas</th>
                                <th style="text-align: center">Luas Tanah</th>
                                <th style="text-align: center">Luas Bangunan</th>
                                <th style="text-align: center">Harga</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @php
                                $increment = 1;
                            @endphp
                            @foreach ($bobot as $index => $item)
                            <tr>
                                <td>{{ $index + $bobot->firstItem() }}</td>
                                <td>{{ $item->fasilitas }}</td>
                                <td>{{ $item->luas_tanah }}</td>
                                <td>{{ $item->luas_bangunan }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>
                                    {{-- <a href="#" class="btn btn-danger delete mt-3" data-id="{{ $item->id }}"><i class="bi bi-trash"></i></a> --}}
                                    <form action="{{ route('bobot.destroy', $item->id) }}" method="post">
                                        <a href="/tampilbobot/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger mb-0"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="form-group d-flex justify-content-between mt-3">
                        <div>
                            Showing
                            {{ $bobot->firstItem() }}
                            to
                            {{ $bobot->lastItem() }}
                            of
                            {{ $bobot->total() }}
                            entries
                        </div>

                        <div class="pull-right">
                            {{ $bobot->links() }}
                        </div>
                    </div>

                </div>
    </div>
    @endsection



    {{-- <script
        src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
    <script>
        $('.delete').on('click','button[data-id=delete]',function(){
				var id = $(this).data('id');
				swal({
					title: "Hapus Data Berita ?",
					text: "Data akan terhapus dari database.",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
            if (willDelete) {
                window.location = "/destroy/{id}"
                swal("Data berhasil dihapus", {
                icon: "success",
                });
            } else {
                swal("Data tidak jadi dihapus");
            }
		});
	});
        // $('.delete').click( function(){
        //     var beritaid = $(this).attr('data-id');
        //         swal({
        //     title: "Yakin ?",
        //     text: "Kamu akan menghapus data berita!",
        //     icon: "warning",
        //     buttons: true,
        //     dangerMode: true,
        //     })
        //     .then((willDelete) => {
        //     if (willDelete) {
        //         window.location = "/destroy/{id}"
        //         swal("Data berhasil dihapus", {
        //         icon: "success",
        //         });
        //     } else {
        //         swal("Data tidak jadi dihapus");
        //     }
        //     });
        // });

    </script>
</html> --}}


