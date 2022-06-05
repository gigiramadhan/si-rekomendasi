@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle">
        <h1>Kegiatan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Kegiatan</li>
                </ol>
            </nav>
    </div>

    <section class="section kegiatan">
        @yield('content')
    </section>

    {{-- @if (\Session::has('berhasil'))
        <div class="alert alert-success">
            <p>{{ \Session::get('berhasil') }}</p>
        </div>
    @endif --}}

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-4">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>

            <form action="/kegiatan/search" class="form-inline" method="GET">
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
                            <th style="text-align: center">Judul</th>
                            <th style="text-align: center">Deskripsi</th>
                            <th style="text-align: center">Gambar</th>
                            <th style="text-align: center">Tanggal Pembuatan</th>
                            <th style="text-align: center">Tanggal Perubahan</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $increment = 1;
                        @endphp
                            @if ($kegiatan != null)
                                @foreach ($kegiatan as $index => $item)
                                <tr>
                                    <td style="text-align: center">{{ $index + $kegiatan->firstItem() }}</td>
                                    <td style="text-align: left">{{ $item->judul }}</td>
                                    <td style="text-align: left">{!! $item->deskripsi !!}</td>
                                    <td><img src="{{ URL::to('/') }}/gambar/{{ $item->gambar }}" width="130px"></td>
                                    <td style="text-align: left">{{ $item->created_at }}</td>
                                    <td style="text-align: left">{{ $item->updated_at }}</td>

                                    <td>
                                        {{-- <a href="#" class="btn btn-danger delete mt-3" data-id="{{ $item->id }}"><i class="bi bi-trash"></i></a> --}}
                                        <form class="d-flex justify-content-center gap-2" action="{{ route('kegiatan.destroy', $item->id) }}" method="get">
                                            <a href="/tampilkegiatan/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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
                            {{ $kegiatan->firstItem() }}
                            to
                            {{ $kegiatan->lastItem() }}
                            of
                            {{ $kegiatan->total() }}
                            entries
                        </div>

                        <div class="pull-right">
                            {{ $kegiatan->links() }}
                        </div>
                    </div>
            </div>
    </div>
    @include('sweetalert::alert')
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


