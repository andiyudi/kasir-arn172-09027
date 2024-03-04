<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data= array(
            'title' => 'Data Barang',
            'data_jenis' => JenisBarang::all(),
            'data_barang' => Barang::join('jenis_barang', 'jenis_barang.id', '=', 'barang.id_jenis')
                        ->SELECT('barang.*', 'jenis_barang.nama_jenis')
                        ->get(),
        );

        return view('admin.master.barang.list',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'id_jenis' =>  $request->id_jenis,
            'nama_barang' =>  $request->nama_barang,
            'harga' =>  $request->harga,
            'stok' =>  $request->stok,
        ]);

        return redirect('/barang')->with('success', 'Data berhasil disimpan');
    }

        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Barang::where('id', $id)
        ->where('id', $id)
        ->update([
            'id_jenis' =>  $request->id_jenis,
            'nama_barang' =>  $request->nama_barang,
            'harga' =>  $request->harga,
            'stok' =>  $request->stok,
        ]);

        return redirect('/barang')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Barang::where('id', $id)->delete();
        return redirect('/barang')->with('success', 'Data berhasil dihapus');
    }
}
