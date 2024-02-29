<?php

namespace App\Http\Controllers\AdminGudang;
use Illuminate\Http\Request;

use App\Models\AdminGudang\Kos;
use App\Models\AdminGudang\gender;
use App\Models\AdminGudang\Satuan;
use App\Http\Controllers\Controller;
use App\Models\AdminGudang\Kategori;
use App\Models\AdminGudang\BannerSet;
use App\Models\AdminGudang\FooterSet;
use App\Models\AdminGudang\TypeKamar;

class HomeController extends Controller
{
    public function index(Request $request){
        $coba = Kos::all();
        $kategoriId = $request->input('kos', 'all');
        $satuanId = $request->input('kampus', 'all');
        $genderId = $request->input('jenis', 'all');

    // Query dasar untuk TypeKamar
    $query = TypeKamar::query();

    if ($kategoriId !== 'all' && $kategoriId !== 'Semua Kategori') {
        $query->whereHas('kos', function ($query) use ($kategoriId) {
            $query->where('kategori_id', $kategoriId);
        });
    }

    // Additional conditions based on $satuanId
    if ($satuanId !== 'all' && $satuanId !== 'Semua Kategori') {
        $query->whereHas('kos', function ($query) use ($satuanId) {
            $query->where('satuan_id', $satuanId);
        });
    }


       // Additional conditions based on $satuanId
       if ($genderId !== 'all' && $genderId !== 'Semua Kategori') {
        $query->whereHas('kos', function ($query) use ($genderId) {
            $query->where('gender_id', $genderId);
        });
    }

    $koss = $query->paginate(6);
    $kossData = $koss->items();
        $banner = BannerSet::all();
        $kategoris = Kategori::all();
        $satuan = Satuan::all();
        $gender = gender::all();
        $footer = FooterSet::all();

        return view('Home.home', [
        'koss' => $koss,
        'banner' => $banner,
        'kategoris' => $kategoris,
        'satuan' => $satuan,
        'footer' => $footer,
        'coba' => $coba,
        'gender' => $gender

    ]);
    }


}

