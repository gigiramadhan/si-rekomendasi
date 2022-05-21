@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle">
        <h1>Transaksi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Transaksi</li>
                </ol>
            </nav>
    </div>

    <section class="section transaksi">
        @yield('content')
    </section>

    {{-- @if (\Session::has('berhasil'))
        <div class="alert alert-success">
            <p>{{ \Session::get('berhasil') }}</p>
        </div>
    @endif --}}

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="d-md-flex justify-content-md-end mt-3">
            <form action="/transaksi/search" method="GET">
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
            <table class="table table-hover table-bordered border-secondary mt-4">
                <thead class="thead-light">
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">No Handphone</th>
                        <th style="text-align: center">Tanggal Pembayaran</th>
                        <th style="text-align: center">Bukti Pembayaran</th>
                        <th style="text-align: center">Status Transaksi</th>
                        <th style="text-align: center">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    @php
                        $increment = 1;
                    @endphp
                    @if ($transaction != null)
                        @foreach ($transaction as $index => $item)
                            <tr>
                                <td style="text-align: center">{{ $index + $transaction->firstItem() }}</td>
                                <td style="text-align: left">{{ $item->nama }}</td>
                                <td style="text-align: left">{{ $item->no_telp }}</td>
                                <td style="text-align: left">{{ $item->tgl_bayar }}</td>
                                <td style="text-align: left">{{ $item->bukti_bayar }}</td>
                                <td style="text-align: left">{{ $item->status_transaksi }}</td>

                                <td>
                                    <form class="d-flex align-items-center gap-2" action="{{ route('data_transaksi.destroy', $item->id) }}" method="get">
                                        <a href="/tampiltransaksi/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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
                    {{ $transaction->firstItem() }}
                    to
                    {{ $transaction->lastItem() }}
                    of
                    {{ $transaction->total() }}
                    entries
                </div>

                <div class="pull-right">
                    {{ $transaction->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
    {{-- <script src="sweetalert2.all.min.js"></script>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })
    </script> --}}



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


