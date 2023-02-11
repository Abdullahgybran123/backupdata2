<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Kategori_obat;
use App\Models\Obat;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('welcome', compact('obats'));
    }

    public function about()
    {
        return view('about');
    }

    public function shop(Request $request)
    {
        $data = $request->all();
        $obats = Obat::all();
        // dd($data);
        if ($data) {
            $obats = Obat::where('id_kategori', $data['kategori'])->get();
        }
        $kategori = Kategori_obat::all();
        // dd(count($kategori));
        return view('shop', compact('obats', 'kategori'));
    }
    public function kategori()
    {
        //menampilkan semua data dari model Kategori
        $kategori = Kategori_obat::all();
        return view('shop', compact('kategori'));
    }

    public function singleShop(Obat $obat)
    {
        return view('single_shop', compact('obat'));
    }
    public function cart($obat, Request $request)
    {
        // dd($obat);
        // $obat = Obat::all();
        // return view('cart', compact('obat'));
        // dd($obat);

        $obat = Obat::where('slug', $obat)->first();
        $jumlah = $request->jumlah;
        return view('cart', compact('obat', 'jumlah'));

    }
    public function checkout($obat, Request $request)
    {
        // dd($obat);
        $obat = Obat::where('slug', $obat)->first();
        $jumlah = $request->jumlah;
        $pembeli = Pembeli::all();
        return view('checkout', compact('pembeli', 'obat', 'jumlah'));
    }
    // public function checkout($obat, Request $request)
    // {
    //     $obat = Obat::where('slug', $obat)->first();
    //     // dd($obat);
    //     $jumlah = $request->jumlah;
    //     $pembeli = Pembeli::all();
    //     return view('checkout', compact('pembeli', 'obat', 'jumlah'));
    // }
    public function transaksi   (Request $request)
    {
        // $obat = Obat::where('slug', $obat)->first();
        // $pembeli = Pembeli::where('slug', $pembeli)->first();
        // $jumlah = $request->jumlah;
        $transaksi = Transaksi::all();
        return view('transaksi', compact('transaksi'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
