@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NAMA KATEGORI</label>
                                <input type="text" class="form-control  @error('nama_kategori') is-invalid @enderror" name="nama_kategori">
                                @error('nama_kategori')
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