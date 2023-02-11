@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Obat
                </div>
                <div class="card-body">
                    <form action="{{ route('obat.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Obat</label>
                            <input type="text" class="form-control  @error('nama_obat') is-invalid @enderror"
                                name="nama_obat">
                            @error('nama_obat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control  @error('keterangan') is-invalid @enderror">
                                    @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control  @error('stok') is-invalid @enderror" name="stok">
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                name="harga">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror"
                                id="">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('id_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection