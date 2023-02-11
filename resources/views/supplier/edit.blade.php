
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data supplier
                    </div>
                    <div class="card-body">
                        <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Supplier</label>
                                <input type="text" class="form-control  @error('supplier') is-invalid @enderror"
                                name="supplier" value="{{ $supplier->supplier}}">
                                @error('supplier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Obat</label>
                                <input type="text" class="form-control  @error('id_obat') is-invalid @enderror"
                                name="id_obat" value="{{ $supplier->id_obat }}">
                                @error('id_obat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control  @error('jumlah') is-invalid @enderror"
                                name="jumlah" value="{{ $supplier->jumlah }}">
                                @error('jumlah')
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
