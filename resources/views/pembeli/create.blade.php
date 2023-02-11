{{-- @extends('layouts.admin')

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
                    <form action="{{ route('pembeli.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Hp</label>
                            <input type="number" class="form-control  @error('no_hp') is-invalid @enderror"
                                name="no_hp">
                            @error('no_hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                name="alamat">
                            @error('alamat')
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
@endsection --}}