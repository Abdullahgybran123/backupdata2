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
                        <form action="{{ route('transaksi.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Pembeli</label>
                                <select name="id_pembeli" class="form-control @error('id_pembeli') is-invalid @enderror"
                                    id="">
                                    @foreach ($pembeli as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Obat</label>
                                <select name="id_obat" class="form-control @error('id_obat') is-invalid @enderror"
                                    id="">
                                    @foreach ($obat as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                                    @endforeach
                                </select>
                                @error('id_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control  @error('jumlah') is-invalid @enderror" name="jumlah">
                                @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Tanggal Transaksi</label>
                                <input type="date" class="form-control  @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi">
                                @error('tanggal_transaksi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Total</label>
                                <input type="number" class="form-control  @error('total') is-invalid @enderror" name="total">
                                @error('total')
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