<?php

namespace App\Http\Controllers;


use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= array(
            'title' => 'Data Jenis Barang',
            'data_jenis' => JenisBarang::all(),
        );

        return view('admin.master.jenisbarang.list',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JenisBarang::create([
            'nama_jenis' =>  $request->nama_jenis,
        ]);

        return redirect('/jenisbarang')->with('success', 'Data berhasil disimpan');
    }

        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        JenisBarang::where('id', $id)
        ->where('id', $id)
        ->update([
            'nama_jenis' => $request->nama_jenis,
        ]);

        return redirect('/jenisbarang')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        JenisBarang::where('id', $id)->delete();
        return redirect('/jenisbarang')->with('success', 'Data berhasil dihapus');
    }
}
