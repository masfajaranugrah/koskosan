<?php
namespace App\Http\Controllers\AdminGudang\Setting_homepage;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // Import the Storage facade
use App\Models\AdminGudang\BannerSet;

class BannerController extends Controller
{
    public function index(){
        $barang = BannerSet::all();
        return view('Admin.Components.Setting_homepage.Banner', compact('barang'));
    }
    public function storeBanner(Request $request)
    {
        $request->validate([
            'judul_banner' => 'required',
            'deskripsi_banner' => 'required',
            'link_button1' => 'required',
            'link_button2' => 'required',
            'nama_button1' => 'required',
            'nama_button2' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambar = $request->file('gambar');

        if ($gambar) {
            $file_name = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/post-barang-gambar', $file_name);

            BannerSet::create([
                'judul_banner' => $request->judul_banner,
                'deskripsi_banner' => $request->deskripsi_banner,
                'link_button1' => $request->link_button1,
                'link_button2' => $request->link_button2,
                'nama_button1' => $request->nama_button1,
                'nama_button2' => $request->nama_button2,
                'gambar' => $file_name,
            ]);
        }

        return redirect('admin-gudang/banner-home')->with('success', 'create new barang success ');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_banner' => 'required',
            'deskripsi_banner' => 'required',
            'link_button1' => 'required',
            'link_button2' => 'required',
            'nama_button1' => 'required',
            'nama_button2' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $barang = BannerSet::find($id);

        if (!$barang) {
            return redirect('admin-gudang/banner-home');
        }

        $gambarSebelumnya = $barang->gambar;

        $barang->update([
            'judul_banner' => $request->judul_banner,
            'deskripsi_banner' => $request->deskripsi_banner,
            'link_button1' => $request->link_button1,
            'link_button2' => $request->link_button2,
            'nama_button1' => $request->nama_button1,
            'nama_button2' => $request->nama_button2,
        ]);

        if ($request->hasFile('gambar')) {
            if ($gambarSebelumnya) {
                Storage::delete('public/post-barang-gambar/' . $gambarSebelumnya);
            }

            $gambar = $request->file('gambar');
            $file_name = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/post-barang-gambar', $file_name);

            $barang->update(['gambar' => $file_name]);
        }

        return redirect('admin-gudang/banner-home')->with('success', 'update barang success ');
    }
}
