<?php
namespace App\Http\Controllers\AdminGudang;

use Illuminate\Http\Request;


use App\Models\AdminGudang\Kos;
use App\Models\AdminGudang\Satuan;
use App\Http\Controllers\Controller;
use App\Models\AdminGudang\FooterSet;
use App\Models\AdminGudang\Pengurus_kos;

class ViewDetailController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('view');
        $product = Kos::find($id);
        $nama = $request->query('nama');
        $pengurus = Pengurus_kos::all();
        $footer = FooterSet::all();
        $satuans = Satuan::all();
        return view("Home.Components.ViewDetailProduct",['satuans' => $satuans,'product' => $product,'nama' => $nama, 'pengurus' => $pengurus, 'footer' => $footer]);
    }
}
