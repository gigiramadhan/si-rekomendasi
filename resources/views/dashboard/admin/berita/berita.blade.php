@extends('dashboard.admin.layouts.main')
    @section('breadcrumb')
    <div class="pagetitle ms-3">
        <h1>Berita</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Berita</li>
                </ol>
            </nav>
    </div>

    <section class="section berita">
        @yield('content')
    </section>

    <div class="row">
        <div class="col-md-6 mt-4"></div>

        <div class="form-group d-flex justify-content-between mt-3 ms-3">
            <a href="{{ route('berita.create') }}" class="btn btn-primary" style="margin-bottom: 20px"><i class="bi bi-plus-lg me-2"></i>Tambah Data</a>

            <form action="/berita/search" method="GET">
                {{-- <div class="input-group">
                    <form action="/search" class="form-inline" method="GET"></form>
                    <input type="search" name="search" class="form-control" placeholder="search here.....">
                    <span class="input-group-prepend me-3">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div> --}}
            </form>
        </div>

        <div class="card-body">
            <table class="table datatable table-striped mt-2 ms-2">
                <thead class="thead-light" style="">
                {{-- <table class="table table-striped table-hover">
                <thead> --}}
                    <tr>
                        <th style="text-align: center" width='15%'>No</th>
                        <th style="text-align: center">Judul</th>
                        <th style="text-align: center" width='18%'>Deskripsi</th>
                        <th style="text-align: center">Gambar</th>
                        <th style="text-align: center" width='20%'>Tanggal Pembuatan</th>
                        <th style="text-align: center" width='20%'>Tanggal Perubahan</th>
                        <th style="text-align: center">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $index => $item)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="text-align: left">{{ $item->judul }}</td>
                        <td style="text-align: left">{!! $item->deskripsi !!}</td>
                        <td style="text-align: center"><img src="{{ URL::to('/') }}/gambar/{{ $item->gambar }}" width="130px"></td>
                        <td style="text-align: left">{{ $item->created_at }}</td>
                        <td style="text-align: left">{{ $item->updated_at }}</td>

                        <td>
                            <form class="d-flex justify-content-center gap-2" action="{{ route('berita.destroy', $item->id) }}" method="get">
                                <a href="/berita/tampildata/{{ $item->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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
                    {{ $berita->firstItem() }}
                    to
                    {{ $berita->lastItem() }}
                    of
                    {{ $berita->total() }}
                    entries
                </div>

                <div class="pull-right">
                    {{ $berita->links() }}
                </div>
            </div> --}}
        </div>
    </div>
    @include('sweetalert::alert')
    {{-- <script type="text/javascript">
        $(function () {

          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('berita.fetch') }}",
              columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'judul', name: 'judul'},
                  {data: 'deskripsi', name: 'deskripsi'},
                  {data: 'gambar', name: 'gambar'},
                  {data: 'created_at', name: 'created_at'},
                  {data: 'updated_at', name: 'updated_at'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });

          $(document).on('click','.deleteIcon',function(){
            alert('apakah yakin dihapus');
          })
        });
      </script> --}}
@endsection


