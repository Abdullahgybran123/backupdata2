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
                        <label class="form-label">Supplier</label>
                        <input class="form-control " name="supplier" value="{{ $supplier->supplier }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Obat</label>
                        <textarea class="form-control" name="id_obat" readonly>{{ $supplier->id_obat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input class="form-control" name="jumlah" value="{{ $supplier->jumlah }}" readonly>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('supplier.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection