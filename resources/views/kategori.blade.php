@extends('layouts.main')
@section('content')
<br>
<br>
<br>
<br>
<br>
{{-- <div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-3">
                <h2 class="text-uppercase">New Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">
                    @foreach($kategoris as $data)
                    <a href="">

                        <div style="background-color: blue; widht: 190px height:100px">
                            <div class="">
                                <a href="#" class="h-100">
                                    <h5 align="center">{{ $data->nama_kategori }}</h5>
                                </a>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="site-section">
    <div class="container">
        <div class="row align-items-stretch section-overlap">

            @foreach($kategoris as $data)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="">
                    <a href="#" class="h-100">
                        <h5>{{ $data->nama_kategori }}</h5>
                        <p>
                            Amet sit amet dolor
                            <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                        </p>
                    </a>
                </div>
            </div>


            @endforeach
        </div>

    </div>
</div> --}}
{{-- <div class="card-body">
    <div class="table-responsive">
        <table class="table align-middle" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($kategoris as $data)
                <select name="" id="">kategori
                    <option value="">{{ $data->nama_kategori }}</option>
                </select>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_kategori }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a href="{{ route('kategori.show', $data->id) }}" class="btn btn-sm btn-outline-warning">
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
</div> --}}
@endsection