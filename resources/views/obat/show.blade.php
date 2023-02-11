
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
                            <label class="form-label">Image</label>
                            <input type="text" class="form-control " name="image" value="{{ $obat->image }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Obat</label>
                            <textarea class="form-control" name="nama_obat" readonly>{{ $obat->nama_obat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $obat->keterangan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{ $obat->stok }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $obat->harga }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('obat.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection