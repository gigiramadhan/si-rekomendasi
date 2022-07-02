@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle ms-2">
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

    {{-- @if (\Session::has('berhasil'))
        <div class="alert alert-success">
            <p>{{ \Session::get('berhasil') }}</p>
        </div>
    @endif --}}

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-4 ms-2">
            <a href="{{ route('bobot.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Kriteria</a>

            <form action="/bobot/search" class="form-inline" method="GET">
                <div class="input-group">
                    {{-- <form action="/search" class="form-inline" method="GET"></form> --}}
                    <input type="search" name="search" class="form-control" placeholder="search here.....">
                    <span class="input-group-prepend me-3">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>

            <div class="card-body">
                <table class="table table-striped mt-3">
                    <thead class="thead-light">
                    {{-- <table class="table table-striped table-hover">
                    <thead> --}}
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Nama Kriteria</th>
                            <th style="text-align: center">Attribut</th>
                            <th style="text-align: center">Bobot</th>
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
                            <td>{{ $item->name_kriteria }}</td>
                            <td>{{ $item->attribut }}</td>
                            <td>{{ $item->bobot }}</td>

                            <td>
                                {{-- <a href="#" class="btn btn-danger delete mt-3" data-id="{{ $item->id }}"><i class="bi bi-trash"></i></a> --}}
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


