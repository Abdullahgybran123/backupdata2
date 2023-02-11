@extends('layouts.main')
@section('content')
{{-- <div class="col-md-6 mb-5 mb-md-0">
    <h2 class="h3 mb-3 text-black">Billing Details</h2>
    <div class="p-3 p-lg-5 border">
        <div class="form-group row">
            <div class="col-md-12">
                <label for="c_companyname" class="text-black">Nama</label>
                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <label for="c_companyname" class="text-black">No HP</label>
                <input type="number" class="form-control" id="c_companyname" name="no_hp">
            </div>
        </div>

        <div class="form-group">
            <label for="c_order_notes" class="text-black">Alamat</label>
            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                placeholder="Write your notes here..."></textarea>
        </div>

    </div>
</div> --}}
<center>
    <div class="col-md-6">
        <div class="row mb-5">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Pesanan Anda</h2>
                <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-8">
                        <thead>
                            <th>Product</th>
                            <th>Nama Pembeli</th>
                            <th>Jumlah</th>
                            <th>Tanggal Transaksi</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td>{{$obat->nama_obat}}</td>
                                <td>{{$jumlah}}<strong class="mx-2">x</strong></td>
                                <td>Rp.{{number_format($obat->harga,0,'.','')}}</td>
                                <td>{{$total = $jumlah*$obat->harga}}</td>
                            </tr> --}}
                            @foreach($transaksi as $dt)

                            <tr>
                                <td><strong class="mx-2">{{$dt->nama_obat}}</strong></td>
                                <td><strong class="mx-2">{{$dt->pembeli->nama}}</strong></td>
                                <td><strong class="mx-2">{{$dt->jumlah}}</strong></td>
                                <td><strong class="mx-2">{{$dt->tanggal_transaksi}}</strong></td>
                                <td><strong class="mx-2">Rp.{{$dt->total}}</strong></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{--
                    <div class="border mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                                aria-expanded="false" aria-controls="collapsebank">Direct Bank
                                Transfer</a></h3>

                        <div class="collapse" id="collapsebank">
                            <div class="py-2 px-4">
                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                    your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared
                                    in our account.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque"
                                role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque
                                Payment</a></h3>

                        <div class="collapse" id="collapsecheque">
                            <div class="py-2 px-4">
                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                    your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared
                                    in our account.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border mb-5">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal"
                                role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a>
                        </h3>

                        <div class="collapse" id="collapsepaypal">
                            <div class="py-2 px-4">
                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                    your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared
                                    in our account.</p>
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <a href="{{url('/thankyou')}}" class="btn btn-primary btn-lg btn-block">Place Order</a>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/shop')}}" class="btn btn-primary btn-lg btn-block">tambah pesanan</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- </form> -->
    </div>
    </div>


    {{-- <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
                        <div class="banner-1-inner align-self-center">
                            <h2>Pharma Products</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                                voluptatem.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
                        <div class="banner-1-inner ml-auto  align-self-center">
                            <h2>Rated by Experts</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                                voluptatem.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection
</center>