<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
        //menampilkan semua data dari model supplier
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
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
        return view('supplier.create', compact('obat'));
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
            'supplier' => 'required',
            'id_obat' => 'required',
            'jumlah' => 'required',
        ]);

        $supplier = new supplier();
        $supplier->supplier = $request->supplier;
        $supplier->id_obat = $request->id_obat;
        $supplier->jumlah = $request->jumlah;
        $supplier->save();

        $obat = Obat::findOrFail($request->id_obat);
        $obat->stok += $request->jumlah;
        $obat->save();

        return redirect()->route('supplier.index')
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
        $supplier = Supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));

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
            'supplier' => 'required',
            'id_obat' => 'required',
            'jumlah' => 'required',
        ]);
        $supplier = Supplier::findOrFail($id);
        $supplier->supplier = $request->supplier;
        $supplier->id_obat = $request->id_obat;
        $supplier->jumlah = $request->jumlah;
        $supplier->save();
        return redirect()->route('supplier.index')
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
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('supplier.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
