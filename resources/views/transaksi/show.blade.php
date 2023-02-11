@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pembeli
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Pembeli</label>
                        <input class="form-control " name="id_pemebli" value="{{ $transaksi->pembeli->nama}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Obat</label>
                        <textarea class="form-control" name="id_obat" readonly>{{ $transaksi->id_obat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Transaksi</label>
                        <input class="form-control" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total</label>
                        <input class="form-control" name="total" value="{{ $transaksi->total }}" readonly>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('transaksi.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection