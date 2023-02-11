<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\kategori_obat;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
        //menampilkan semua data dari model Kategori
        $kategori = Kategori_obat::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori.create');
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
            'nama_kategori' => 'required',
        ]);

        $kategori = new Kategori_obat();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('kategori.index')
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
        $kategori = Kategori_obat::findOrFail($id);
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori_obat::findOrFail($id);
        return view('kategori.edit', compact('kategori'));

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
        // $validated = $request->validate([
        //     'nama_Kategori' => 'required',
        // ]);

        $kategori = Kategori_obat::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        Alert::success('Data Updated')->autoClose(2000);
        return redirect()->route('kategori.index')
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
        $kategori = Kategori_obat::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
