<?php
namespace App\Http\Controllers\AdminGudang;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\AdminGudang\Pengurus_kos;

class PengelolaKosController extends Controller
{
    public function index(){
        $pengurus = Pengurus_kos::all();
        return view('Admin.Components.Details.pengelolakos', compact('pengurus'));
    }
    public function create(Request $request){
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'link_whatsapp' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
             ]);

        $gambar = $request->file('gambar');

             if ($gambar) {
                $file_name = time() . '_' . $gambar->getClientOriginalName();
                $gambar->storeAs('public/profil-pengelola', $file_name);

             Pengurus_kos::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'link_whatsapp' => $request->link_whatsapp,
                'gambar' => $file_name,

            ]);
        }
    return redirect('admin-gudang/pengelola-kos')->with('success', ' author berhasil ditambahkan ');

    }


    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'link_whatsapp' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
             ]);

        $gambar = $request->file('gambar');

             if ($gambar) {
                $file_name = time() . '_' . $gambar->getClientOriginalName();
                $gambar->storeAs('public/profil-pengelola', $file_name);

            $pengurus = Pengurus_kos::find($id);;
            $pengurus->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'link_whatsapp' => $request->link_whatsapp,
                'gambar' => $file_name,

            ]);
        }
    return redirect('admin-gudang/pengelola-kos')->with('success', 'author berhasil diupdate');

    }


    public function destroy($id)
    {
        $pengurus = Pengurus_kos::find($id);

        $pengurus->delete();

        return redirect('admin-gudang/pengelola-kos')->with('success', 'author berhasil didelete');
    }
}

