<?php

namespace App\Http\Controllers\AdminGudang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminGudang\Kategori;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view("Admin.Components.Master_data.kategori", compact('kategoris'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kos' => 'required',
        ]);

        Kategori::create([
            'nama_kos' => $request->nama_kos,
        ]);


        return redirect('admin-gudang/satuan-barang')->with('success', 'nama kos berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $kategoris =  Kategori::find($id)->update($request->all());

        return redirect('/admin-gudang/kategori-barang')->with('success', 'nama kos berhasil diupdate');
    }

      public function destroy($id)
    {
        Kategori::find($id)->delete();
        return redirect('/admin-gudang/kategori-barang')->with('success', 'nama kos berhasil didelete');
    }
}
