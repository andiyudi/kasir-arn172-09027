<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function index()
    {
        $data= array(
            'title' => 'Setting Diskon',
            'data_diskon' => Diskon::all(),
        );

        return view('admin.master.diskon.list',$data);
    }

    public function update(Request $request, $id)
    {
        Diskon::where('id', $id)
        ->where('id', $id)
        ->update([
            'total_belanja' => $request->total_belanja,
            'diskon' => $request->diskon,
        ]);

        return redirect('/setdiskon')->with('success', 'Data berhasil diubah');
    }
}
