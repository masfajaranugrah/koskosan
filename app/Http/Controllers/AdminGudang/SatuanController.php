<?php

namespace App\Http\Controllers\AdminGudang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminGudang\Satuan;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuans = Satuan::all();
        return view("Admin.Components.Master_data.satuan", compact('satuans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $request->validate([
            'universitas' => 'required',
            'fakultas' => 'required',
        ]);

        Satuan::create([
            'universitas' => $request->universitas,
            'fakultas' => $request->fakultas,
        ]);

        return redirect('admin-gudang/kos')->with('success', 'referensi berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $satuans =  Satuan::find($id)->update($request->all());

        return redirect('admin-gudang/satuan-barang')->with('success', 'referensi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Satuan::find($id)->delete();
        return redirect('admin-gudang/satuan-barang')->with('success', 'referensi berhasil didelete');
    }
}
