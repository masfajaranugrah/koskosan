<?php

namespace App\Http\Controllers\AdminGudang;

use App\Models\typekos;
use Illuminate\Http\Request;

use App\Models\AdminGudang\Kos;
use App\Http\Controllers\Controller;
use App\Models\AdminGudang\TypeKamar;
use App\Http\Requests\UpdatetypekosRequest;

class TypekosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Koss = Kos::all();
        $type_kamars = TypeKamar::all();
        return view('Admin.Components.Barang.typeBarang', compact('Koss', 'type_kamars'));
    }

    public function storeTypeKamar(Request $request)
    {
        $request->validate([
        'jm_kamar_dalam'=> 'required',
        'km_kamarkosong_dalam' => 'required',
        'jm_kamar_luar' => 'required',
	    'km_kamarkosong_luar' => 'required',
        'kos' => 'required',
        'fasilitas_bersama_luar' => 'required',
	    'fasilitas_km_luar' => 'required',
	    'fasilitas_bersama_dalam' => 'required',
	    'fasilitas_km_dalam' => 'required',
        'harga_thn_luar' => 'required',
	    'harga_bln_luar' => 'required',
	    'harga_thn_dalam' => 'required',
        'harga_bln_dalam' => 'required',
        ]);

        TypeKamar::create([
            'jm_kamar_dalam' => $request->jm_kamar_dalam,
            'km_kamarkosong_dalam' => $request->km_kamarkosong_dalam,
            'jm_kamar_luar' => $request->jm_kamar_luar,
            'km_kamarkosong_luar' => $request->km_kamarkosong_luar,
            'kos_id' => $request->kos,
            'fasilitas_bersama_luar' => $request->fasilitas_bersama_luar,
            'fasilitas_km_luar' => $request->fasilitas_km_luar,
            'fasilitas_bersama_dalam' => $request->fasilitas_bersama_dalam,
            'fasilitas_km_dalam' => $request->fasilitas_km_dalam,
            'harga_thn_luar' => $request->harga_thn_luar,
            'harga_bln_luar' => $request->harga_bln_luar,
            'harga_thn_dalam' => $request->harga_thn_dalam,
            'harga_bln_dalam' => $request->harga_bln_dalam,
        ]);
        return redirect('/admin-gudang/type-kamar')->with('success', 'type kamar berhasil ditambahkan');
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'jm_kamar_dalam'=> 'required',
            'km_kamarkosong_dalam' => 'required',
            'jm_kamar_luar' => 'required',
            'km_kamarkosong_luar' => 'required',
            'kos' => 'required',
            'fasilitas_bersama_luar' => 'required',
            'fasilitas_km_luar' => 'required',
            'fasilitas_bersama_dalam' => 'required',
            'fasilitas_km_dalam' => 'required',
            'harga_thn_luar' => 'required',
            'harga_bln_luar' => 'required',
            'harga_thn_dalam' => 'required',
            'harga_bln_dalam' => 'required',
        ]);
        $typeKamar = TypeKamar::find($id); // Replace $id with the actual ID of the record you want to update

        $typeKamar->update([
            'jm_kamar_dalam' => $request->jm_kamar_dalam,
            'km_kamarkosong_dalam' => $request->km_kamarkosong_dalam,
            'jm_kamar_luar' => $request->jm_kamar_luar,
            'km_kamarkosong_luar' => $request->km_kamarkosong_luar,
            'kos_id' => $request->kos,
            'fasilitas_bersama_luar' => $request->fasilitas_bersama_luar,
            'fasilitas_km_luar' => $request->fasilitas_km_luar,
            'fasilitas_bersama_dalam' => $request->fasilitas_bersama_dalam,
            'fasilitas_km_dalam' => $request->fasilitas_km_dalam,
            'harga_thn_luar' => $request->harga_thn_luar,
            'harga_bln_luar' => $request->harga_bln_luar,
            'harga_thn_dalam' => $request->harga_thn_dalam,
            'harga_bln_dalam' => $request->harga_bln_dalam,
        ]);
        return redirect('/admin-gudang/type-kamar')->with('success', 'type kamar berhasil diupdate');
    }



    public function destroy($id)
    {
        TypeKamar::find($id)->delete();
        return redirect('/admin-gudang/kos')->with('success', 'type kamar berhasil  didelete');
    }
}
