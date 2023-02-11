
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data obat
                    </div>
                    <div class="card-body">
                        <form action="{{ route('obat.update', $obat->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control  @error('image') is-invalid @enderror"
                                name="image" value="{{ $obat->image }}">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Obat</label>
                                <input type="text" class="form-control  @error('nama_obat') is-invalid @enderror"
                                name="nama_obat" value="{{ $obat->nama_obat }}">
                                @error('nama_obat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">keterangan</label>
                                <input type="text" class="form-control  @error('keterangan') is-invalid @enderror"
                                name="keterangan" value="{{ $obat->keterangan }}">
                                @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control  @error('stok') is-invalid @enderror"
                                name="stok" value="{{ $obat->stok }}">
                                @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                name="harga" value="{{ $obat->harga }}">
                                @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
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