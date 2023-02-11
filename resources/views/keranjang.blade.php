@extends('layouts.main')
@section('content')
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" action="{{url('cart.store')}}" method="POST">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Gambar</th>
                                <th class="product-name">Produk</th>
                                <th class="product-price">Harga</th>
                                <th class="product-quantity">Jumlah</th>
                                <th class="product-total">Total Harga</th>
                                <th class="product-remove">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <form action="{{url('cart',$obat->slug)}}" method="GET"> --}}
                                @foreach($cart as $data)

                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{ $data->$obat->image() }}" alt="Image" class="img-fluid">
                                    </td>
                                    <td>{{$data->$obat->nama_obat}}</td>
                                    <td>Rp.{{number_format($data->$obat->harga,0,'.','')}}</td>
                                    <td>{{$data->$jumlah_pesanan}}</td>
                                    {{-- <input type="text" name="jumlah"> --}}
                                    {{-- <td>
                                        <div class="mb-5">
                                            <div class="input-group mb-3" style="max-width: 220px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus"
                                                        type="button">&minus;</button>
                                                </div>
                                                <input type="text" name="jumlah" class="form-control text-center"
                                                    value="{{$jumlah}}" placeholder=""
                                                    aria-label="Example text with button addon"
                                                    aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus"
                                                        type="button">&plus;</button>
                                                </div>
                                            </div>

                                        </div>
                                    </td> --}}
                                    <td>{{$data->$total = $jumlah*$obat->harga}}</td>
                                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a>
                                    </td>
                                </tr>
                                @endforeach
                                @foreach ($obat as $obat)
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{ $obat->image() }}" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{$obat->nama_obat}}</h2>
                                    </td>
                                    <td>{{$obat->harga}}</td>
                                    <td>
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus"
                                                    type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center" value="1" placeholder=""
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus"
                                                    type="button">&plus;</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>$49.00</td>
                                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <a href="{{url('/shop')}}" class="btn btn-primary btn-md btn-block">Kembali</a>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <button type="submit" class="btn btn-primary btn-md btn-block">
                            checktout</button>
                    </div>
                </div>
                </form>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <label class="text-black h4" for="coupon">Coupon</label>
                        <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                        <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-md px-4">Apply Coupon</button>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">Subtotal</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">$230.00</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">$230.00</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-lg btn-block"
                                    onclick="window.location='checkout.html'">Proceed To
                                    Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection