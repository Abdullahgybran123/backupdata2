<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Obat;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model cart
        $cart = Cart::all();
        $jumlah->$request->jumlah;
        return view('keranjang', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $obat = Obat::all();
        return view('cart.create', compact('obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'id_obat' => 'required',
            'jumlah_pesanan' => 'required',
        ]);

        $cart = new cart();
        $cart->id_obat = $request->id_obat;
        $cart->jumlah_pesanan = $request->jumlah_pesanan;
        $cart->save();
        return redirect()->route('cart.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = cart::findOrFail($id);
        return view('cart.show', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = cart::findOrFail($id);
        return view('cart.edit', compact('cart'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'id_obat' => 'required',
            'jumlah_pesanan' => 'required',
        ]);
        $cart = cart::findOrFail($id);
        $cart->id_obat = $request->id_obat;
        $cart->jumlah_pesanan = $request->jumlah_pesanan;
        $cart->save();
        return redirect()->route('cart.index')
            ->with('success', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = cart::findOrFail($id);
        $cart->delete();
        return redirect()->route('cart.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
