@extends('layouts.main')
@section('content')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mr-auto">
                <div class="border text-center">
                    <img src="{{$obat->image()}}" style="width:347px; height: 713px;" alt="Image" class="img-fluid p-5">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-black">{{$obat->nama_obat}}</h2>
                <p> <strong class="text-primary h4">Rp.{{number_format($obat->harga,0,'.','')}}</strong></p>
                <form action="{{url('cart',$obat->slug)}}" method="GET">
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 220px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" name="jumlah" class="form-control text-center" value="1" placeholder=""
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>

                    </div>
                    {{-- <p><a href="{{url('cart')}}" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">
                            Keranjang</a> --}}
                        {{-- <button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">
                            Beli</button> --}}
                        <button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">
                            Keranjang</button>
                    </p>
                </form>
                <div class="mt-5">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <table class="  ">
                                <thead>
                                    <th>Description</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$obat->keterangan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-secondary bg-image" style="background-image: url('assets1/images/bg_2.jpg');">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('assets1/images/bg_1.jpg');">
                    <div class="banner-1-inner align-self-center">
                        <h2>Hidup Sehat Dengan Minum Obat</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('assets1/images/bg_2.jpg');">
                    <div class="banner-1-inner ml-auto  align-self-center">
                        <h2>Jagalah Kesehatan Dengan Hidup Teratur</h2>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection