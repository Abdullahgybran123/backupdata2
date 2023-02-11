
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control " name="nama_kategori" value="{{ $kategori->nama_kategori }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('kategori.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection