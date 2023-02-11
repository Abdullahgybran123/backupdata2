<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;

class DataUserController extends Controller
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
        //menampilkan semua data dari model data_user
        $data_user = DataUser::all();
        return view('data_user.index', compact('data_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('data_user.create');
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
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data_user = new data_user();
        $data_user->nama = $request->nama;
        $data_user->email = $request->email;
        $data_user->password = $request->password;
        $data_user->save();
        return redirect()->route('data_user.index')
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
        $data_user = DataUser::findOrFail($id);
        return view('data_user.show', compact('data_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_user = DataUser::findOrFail($id);
        return view('data_user.edit', compact('data_user'));

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
            'email' => 'required',
            'password' => 'required',
        ]);

        $odata_user=  DataUser::findOrFail($id);
        $data_user->nama = $request->nama;
        $data_user->email = $request->email;
        $data_user->password = $request->password;
        $data_user->save();
        return redirect()->route('data_user.index')
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
        $data_user = DataUser::findOrFail($id);
        $data_user->delete();
        return redirect()->route('data_user.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
