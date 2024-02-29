<?php

namespace App\Http\Controllers\AdminGudang;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdminGudang\Kos;
use App\Models\AdminGudang\Barang;
use App\Http\Controllers\Controller;
use App\Models\Karyawan\ReturBarang;
use App\Models\AdminGudang\TypeKamar;
use App\Models\AdminGudang\BarangInOut;
use App\Models\PengambilanBarang\PengambilanBarang;

class AdminController extends Controller
{
    public function index()
    {
    $kos = Kos::all()->count();
    $kamarall = TypeKamar::selectRaw('SUM(jm_kamar_dalam) as total_jm_kamar_dalam')
    ->selectRaw('SUM(km_kamarkosong_dalam) as total_km_kamarkosong_dalam')
    ->selectRaw('SUM(jm_kamar_luar) as total_jm_kamar_luar')
    ->selectRaw('SUM(km_kamarkosong_luar) as total_km_kamarkosong_luar')
    ->first();

// Access the sums
$total_jm_kamar_dalam = $kamarall->total_jm_kamar_dalam;
$total_km_kamarkosong_dalam = $kamarall->total_km_kamarkosong_dalam;
$total_jm_kamar_luar = $kamarall->total_jm_kamar_luar;
$total_km_kamarkosong_luar = $kamarall->total_km_kamarkosong_luar;

// Total sum across all columns
$total_sum = $total_jm_kamar_dalam + $total_km_kamarkosong_dalam + $total_jm_kamar_luar + $total_km_kamarkosong_luar;

$total_kosong = $total_km_kamarkosong_dalam + $total_km_kamarkosong_luar;
$total_terisi = $total_jm_kamar_dalam  + $total_jm_kamar_luar;
return view("Admin.AdminDashboard.Dashboard", compact('kos','total_sum', 'total_kosong', 'total_terisi' ));
    }
}
