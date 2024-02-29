<?php

namespace App\Http\Controllers\AdminGudang;

use Illuminate\Http\Request;
use App\Models\AdminGudang\Kos;
use App\Models\AdminGudang\gender;
use App\Models\AdminGudang\Satuan;
use App\Http\Controllers\Controller;
use App\Models\AdminGudang\Kategori;
use Illuminate\Support\Facades\Storage;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
        $kos = Kos::all();
        $kategoris = Kategori::all();
        $satuans = Satuan::all();
        $genders = gender::all();

        return view('Admin.Components.Barang.InputBarang', compact('kos','kategoris','satuans','genders'));
    }

public function store(Request $request)
{
    $request->validate([
        'kategori' => 'required',
        'gender' => 'required',
        'satuan' => 'required',
        'deskripsi' => 'required',
        'alamat' => 'required',
        'harga1' => 'nullable',
        'harga2' => 'nullable',
        'type_kos' => 'required',
        'banner' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
        'gambar' => 'required',
        'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:3048',

    ]);

    if ($request->hasfile('gambar')) {
        foreach ($request->file('gambar') as $file) {
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/post-barang-gambar', $file_name);
            $files[] = $file_name;
        }
    }
    $banner = $request->file('banner');

    if ($banner) {
       $name_banner = time() . '_' . $banner->getClientOriginalName();
       $banner->storeAs('public/banner', $name_banner);

    Kos::create([
        'kategori_id' => $request->kategori,
        'gender_id' => $request->gender,
        'satuan_id' => $request->satuan,
        'deskripsi' => $request->deskripsi,
        'alamat' => $request->alamat,
        'harga1' => $request->harga1,
        'harga2' => $request->harga2,
        'type_kos' => $request->type_kos,
        'banner' => $name_banner,
        'gambar' => $files,

    ]);
    }
    return redirect('/admin-gudang/type-kamar')->with('success', 'Kos berhasil ditambahkan');
}


public function update(Request $request, $id)
{
    // dd($request->all());
    $request->validate([
        'kategori' => 'required',
        'gender' => 'required',
        'satuan' => 'required',
        'deskripsi' => 'required',
        'alamat' => 'required',
        'harga1' => 'nullable',
        'harga2' => 'nullable',
        'type_kos' => 'required',
        'banner' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
        'gambar' => 'required',
        'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
    ]);

    $kos = Kos::find($id);

    if (!$kos) {
        return redirect('/admin-gudang/type-kamar')->with('error', 'Barang not found');
    }

    $files = [];
    if ($request->hasfile('gambar')) {
        foreach ($request->file('gambar') as $file) {
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/post-barang-gambar', $file_name);
            $files[] = $file_name;
        }
    }

    $banner = $request->file('banner');
    $name_banner = $kos->banner;

    if ($banner) {
        $name_banner = time() . '_' . $banner->getClientOriginalName();
        $banner->storeAs('public/banner', $name_banner);
    }

    $kos->update([
        'kategori_id' => $request->kategori,
        'gender_id' => $request->gender,
        'satuan_id' => $request->satuan,
        'deskripsi' => $request->deskripsi,
        'alamat' => $request->alamat,
        'harga1' => $request->harga1,
        'harga2' => $request->harga2,
        'type_kos' => $request->type_kos,
        'banner' => $name_banner,
        'gambar' => $files,
    ]);
    return redirect('/admin-gudang/kos')->with('success', 'Kos berhasil diupdate');
}

public function destroy($id)
{
    Kos::find($id)->delete();
    return redirect('/admin-gudang/kos')->with('success', 'Kos berhasil didelete');
}
}
