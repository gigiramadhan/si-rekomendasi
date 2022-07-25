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

    {{-- @if (\Session::has('berhasil'))
        <div class="alert alert-success">
            <p>{{ \Session::get('berhasil') }}</p>
        </div>
    @endif --}}

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex mt-3 ms-3">
            <a href="{{ route('crips.create', $data->id) }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>
            <div class="d-flex ms-2">
                <a href="/bobot" class="btn btn-secondary" style="margin-bottom: 20px"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
            </div>
        </div>

            <div class="card-body">
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
                        {{-- @php
                            $increment = 1;
                        @endphp --}}
                        @foreach ($crips as $index => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_crips }}</td>
                            <td>{{ $item->bobot }}</td>

                            <td>
                                <form class="d-flex justify-content-center gap-2" action="{{ route('crips.destroy', $item->id) }}" method="get">
                                    {{-- <a href="/showbobot/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a> --}}
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

                {{-- <div class="form-group d-flex justify-content-between mt-3">
                    <div>
                        Showing
                        {{ $crips->firstItem() }}
                        to
                        {{ $crips->lastItem() }}
                        of
                        {{ $crips->total() }}
                        entries
                    </div>

                    <div class="pull-right">
                        {{ $crips->links() }}
                    </div>
                </div> --}}
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


