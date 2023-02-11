
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
                            <label class="form-label">Nama</label>
                            <input class="form-control " name="nama" value="{{ $pembeli->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Hp</label>
                            <textarea class="form-control" name="no_hp" readonly>{{ $pembeli->no_hp }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input class="form-control" name="alamat" value="{{ $pembeli->alamat }}"
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