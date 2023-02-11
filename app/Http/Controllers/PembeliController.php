<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PembeliController extends Controller
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
        //menampilkan semua data dari model pembeli
        $pembeli = Pembeli::all();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pembeli.index');
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
        // dd();
        $validated = $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|unique:pembelis|max:11',
            'alamat' => 'required',
        ]);

        $pembeli = new Pembeli();
        $pembeli->nama = $request->nama;
        $pembeli->no_hp = $request->no_hp;
        $pembeli->alamat = $request->alamat;
        $pembeli->save();

        $transaksi = new Transaksi();
        $transaksi->id_obat = $request->id_obat;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total = $request->harga;
        $transaksi->id_pembeli = $pembeli->id;
        $transaksi->tanggal_transaksi = now()->format('Y-m-d H:i:s');

        $transaksi->save();

        return redirect('transaksi')
            ->with('success', 'Data berhasil dibuat!');
    }
    // public function store2(Request $request)
    // {
    //     //validasi
    //     $validated = $request->validate([
    //         'nama' => 'required',
    //         'no_hp' => 'required',
    //         'alamat' => 'required',
    //     ]);

    //     $pembeli = new pembeli();
    //     $pembeli->nama = $request->nama;
    //     $pembeli->no_hp = $request->no_hp;
    //     $pembeli->alamat = $request->alamat;
    //     $pembeli->save();
    //     return redirect('pembeli.index')
    //         ->with('success', 'Data berhasil dibuat!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));

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
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama = $request->nama;
        $pembeli->no_hp = $request->no_hp;
        $pembeli->alamat = $request->alamat;
        $pembeli->save();
        return redirect()->route('pembeli.index')
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
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
