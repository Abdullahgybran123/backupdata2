
@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data obat
                        <a href="{{ route('obat.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>image</th>
                                        <th>nama_obat</th>
                                        <th>keterangan</th>
                                        <th>stok</th>
                                        <th>harga</th>
                                        <th>id_kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($obat as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ $data->image() }}" style="width: 100px; height:100px" alt="">
                                            </td>
                                            <td>{{ $data->nama_obat }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>{{ $data->stok }}</td>
                                            <td>{{ $data->harga }}</td>
                                            <td>{{ $data->kategori_obat->nama_kategori }}</td>
                                            <td>
                                                <form action="{{ route('obat.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('obat.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('obat.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
