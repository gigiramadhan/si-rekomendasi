@extends('dashboard.pengelola.layouts.main')

    @section('breadcrumb')
    <div class="pagetitle">
        <h1>Data Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard_pengelola')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Data Booking</li>
                </ol>
            </nav>
    </div>

    <section class="section data_booking">
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
            <form action="/booking/search" method="GET">
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
                        <th style="text-align: center">Tanggal Booking</th>
                        <th style="text-align: center">Bukti Booking</th>
                        <th style="text-align: center">Status</th>
                        <th style="text-align: center">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    @php
                        $increment = 1;
                    @endphp
                    @if ($booking != null)
                        @foreach ($booking as $index => $item)
                            <tr>
                                <td style="text-align: center">{{ $index + $booking->firstItem() }}</td>
                                <td style="text-align: center">{{ $item->name_booking }}</td>
                                <td style="text-align: center">{{ $item->no_telp }}</td>
                                <td style="text-align: center">{{ $item->date_booking }}</td>
                                <td style="text-align: center"><img src="{{ URL::to('/') }}/gambar/{{ $item->upload_booking }}" width="130px"></td>
                                {{-- <td style="text-align: center">{{ $item->status_booking }}</td> --}}
                                <td style="text-align: center">
                                    @if ($item->status_booking != '0')
                                        <button disabled = "disabled" class="btn btn-primary"><i class="bi bi-check-square"></i></button>
                                        <button disabled = "disabled" class="btn btn-danger"><i class="bi bi-x-square"></i></button>
                                    @else
                                        <form style="margin-bottom: 20px" action="/updatebooking/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('post')
                                            <input type="hidden" value="1" name="status_booking">
                                            <button type="submit" class="btn btn-primary"><i class="bi bi-check-square"></i></button>
                                        </form>
                                        <form style="margin-bottom: 20px" action="/updatebooking/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('post')
                                            <input type="hidden" value="2" name="status_booking">
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-x-square"></i></button>
                                        </form>
                                    @endif
                                </td>

                                <td style="text-align: center">
                                    <form class="gap-2" action="{{ route('data_booking.destroy', $item->id) }}" method="get">
                                        <a href="/showbooking/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
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
                    {{ $booking->firstItem() }}
                    to
                    {{ $booking->lastItem() }}
                    of
                    {{ $booking->total() }}
                    entries
                </div>

                <div class="pull-right">
                    {{ $booking->links() }}
                </div>
            </div>
        </div>
    </div>
    {{-- @include('sweetalert::alert') --}}
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


