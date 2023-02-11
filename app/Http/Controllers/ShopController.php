<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Kategori_obat;
use Illuminate\Http\Request;

class ObatController extends Controller
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
        //menampilkan semua data dari model obat
        $obat = Obat::with('kategori_obat')->get();
        return view('obat.index',['obat'=>$obat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = Kategori_obat::all();
        return view('obat.create',compact('kategori'));
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
            
            'image' => 'required',
            'nama_obat' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_kategori' => 'required',
        ]);

        $obat = new Obat();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/obat/', $name);
            $obat->foto = $name;
        }
        $obat->image = $request->image;
            $obat->nama_obat = $request->nama_obat;
            $obat->keterangan = $request->keterangan;
            $obat->harga = $request->harga;
            $obat->stok = $request->stok;
            $obat->id_kategori = $request->id_kategori;
        $obat->save();
        return redirect()->route('obat.index')
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
        $obat = Obat::findOrFail($id);
        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));

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
            'image' => 'required',
            'nama_obat' => 'required',
            'keterangan' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $obat =  Obat::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/obat/', $name);
            $obat->image = $name;
            $obat->nama_obat = $request->nama_obat;
            $obat->keterangan = $request->keterangan;
            $obat->stok = $request->stok;
            $obat->harga = $request->harga;
            $obat->save();
        }
        return redirect()->route('obat.index')
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
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return redirect()->route('obat.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
