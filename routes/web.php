<?php

use App\Http\Middleware\Admin;
use App\Http\Controllers\ProfileUser;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgetPassContoller;
use App\Http\Controllers\err\Err403Controller;
use App\Http\Controllers\Manager\ManagerDashboard;
use App\Http\Controllers\AdminGudang\KosController;
use App\Http\Controllers\AdminGudang\HomeController;
use App\Http\Controllers\manager\ViewStokController;
use App\Http\Controllers\AdminGudang\AdminController;
use App\Http\Controllers\Karyawan\KaryawanController;
use App\Http\Controllers\AdminGudang\GenderController;
use App\Http\Controllers\AdminGudang\SatuanController;
use App\Http\Controllers\Manager\StokBarangController;
use App\Http\Controllers\AdminGudang\LaporanController;
use App\Http\Controllers\AdminGudang\TypekosController;
use App\Http\Controllers\Karyawan\ViewBarangController;
use App\Http\Controllers\AdminGudang\KategoriController;
use App\Http\Controllers\Karyawan\ReturBarangController;
use App\Http\Controllers\Manager\LaporanBarangController;
use App\Http\Controllers\AdminGudang\ViewDetailController;
use App\Http\Controllers\AdminGudang\BarangInOutController;
use App\Http\Controllers\AdminGudang\PengelolaKosController;
use App\Http\Controllers\AdminGudang\CreateAccountController;
use App\Http\Controllers\AdminGudang\Setting_homepage\BannerController;
use App\Http\Controllers\AdminGudang\Setting_homepage\FooterController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// auth
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest') ;


    Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest') ;
    Route::post('/login', [LoginController::class, 'loginuser']) ;

   //403
    Route::get('/403', [Err403Controller::class, 'index'])->name('err403');

    Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');

    // Route::middleware(['auth','Role:admin'])->group(function () {
        // kos
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard-gudang');
        // input kos
        Route::get('/dashboard/kos', [KosController::class, 'index'])->name('kos');
        Route::post('/dashboard/simpan-barang', [KosController::class, 'store'])->name('simpan-barang');
        Route::patch('/dashboard/barang-gudang/{id}/update',[KosController::class,'update'])->name('edit-kos');
        Route::get('/dashboard/barang/{id}/destroy',[KosController::class,'destroy'])->name('hapus-barang');
        //type kamar
        Route::get('/dashboard/type-kamar', [TypekosController::class, 'index'])->name('type-kamar');
        Route::post('/dashboard/simpan-type-kamar', [TypekosController::class, 'storeTypeKamar'])->name('simpan-type-kamar');
        Route::patch('/dashboard/type-kamar/{id}/update',[TypekosController::class,'update'])->name('edit-type');
        Route::get('/dashboard/type-kamar/{id}/destroy',[TypekosController::class,'destroy'])->name('hapus-type');

        //banner
        Route::get('dashboard/banner-home', [BannerController::class, 'index'])->name('banner-home');
        Route::post('simpan-barang', [BannerController::class, 'storeBanner'])->name('create-banner');
        Route::patch('/dashboard/barang/{id}/update', [BannerController::class, 'update'])->name('update-banner');

          //footer
          Route::get('dashboard/footer-home', [FooterController::class, 'index'])->name('footer-home');
          Route::post('simpan-footer', [FooterController::class, 'store'])->name('create-footer');
        //   Route::patch('/dashboard/barang/{id}/update', [BannerController::class, 'update'])->name('update-banner');

        //view detail
        Route::get('dashboard/view-detail', [ViewDetailController::class, 'index'])->name('view-detail');

        // Kategori
        Route::get('/dashboard/kategori-barang', [KategoriController::class, 'index'])->name('kategori-barang');
        Route::post('simpan-kategori',[KategoriController::class,'store'])->name('simpan-kategori');
        Route::get('/dashboard/kategori-barang/{id}/destroy',[KategoriController::class,'destroy'])->name('hapus-kategori');
        Route::patch('/dashboard/kategori-barang/{id}/update',[KategoriController::class,'update'])->name('edit-kategori');
        // satuan
        Route::get('/dashboard/satuan-barang', [SatuanController::class, 'index'])->name('satuan-barang');
        Route::post('/dashboard/simpan-satuan',[SatuanController::class,'store'])->name('simpan-satuan');
        Route::get('/dashboard/satuan-barang/{id}/destroy',[SatuanController::class,'destroy'])->name('hapus-satuan');
        Route::patch('/dashboard/satuan-barang/{id}/update',[SatuanController::class,'update'])->name('edit-satuan');
    //    gender
    Route::get('/dashboard/gender', [GenderController::class, 'index'])->name('gender');
    Route::post('/dashboard/simpan-gander',[GenderController::class,'store'])->name('simpan-gender');
    Route::get('/dashboard/gender/{id}/destroy',[GenderController::class,'destroy'])->name('hapus-gender');
    Route::patch('/dashboard/gender/{id}/update',[GenderController::class,'update'])->name('edit-gender');
        // create user
        Route::get('/dashboard/cerateAccount',[CreateAccountController::class,'create'])->name('create');
        Route::post('/dashboard/cerateAccount',[CreateAccountController::class,'register'])->name('register');
        Route::patch('/dashboard/cerateAccount/{id}/update',[CreateAccountController::class,'update'])->name('edit-user');
        Route::get('/dashboard/cerateAccount/{id}/destroy',[CreateAccountController::class,'destroy'])->name('hapus-user');
        // acc pengambilan
        Route::get('/dashboard/acc-pengambilan-barang', [AccPengambilanBarangController::class, 'index'])->name('acc-pengambilan-barang');
        Route::post('/dashboard/pengambilan-approve/{id}',[AccPengambilanBarangController::class, 'approve'])->name('pengambilan-barang-disetujui');
        Route::post('/dashboard/pengambilan-reject/{id}',[AccPengambilanBarangController::class, 'reject'])->name('pengambilan-barang-ditolak');
        Route::get('/dashboard/riwayat-pengambilan', [AccPengambilanBarangController::class, 'getRiwayatPengambilanBarang'])->name('riwayat-pengambilan-admin');
        // barang in out
        Route::get('/dashboard/barang-in-out', [BarangInOutController::class, 'index'])->name('barang-in-out');
        Route::post('simpan-barang-masuk',[BarangInOutController::class, 'barangIn'])->name('simpan-barang-masuk');
        Route::post('simpan-barang-keluar',[BarangInOutController::class, 'barangOut'])->name('simpan-barang-keluar');
        Route::get('/dashboard/riwayat-barang-in', [BarangInOutController::class, 'riwayatBarangIn'])->name('barang-in');
        Route::get('/dashboard/riwayat-barang-out', [BarangInOutController::class, 'riwayatBarangOut'])->name('barang-out');
        // acc retur barang
        Route::get('/dashboard/acc-retur-barang-admin', [AccReturBarangController::class, 'index'])->name('acc-retur-barang-admin');
        Route::post('/dashboard/retur-approve/{id}', [AccReturBarangController::class, 'approve'])->name('retur-barang-disetujui-admin');
        Route::put('/dashboard/retur-reject/{id}', [AccReturBarangController::class, 'reject'])->name('retur-barang-ditolak-admin');
        Route::get('/dashboard/riwayat-retur-barang', [AccReturBarangController::class, 'getRiwayatReturBarang'])->name('riwayat-retur-barang-admin');
        // laporan
        Route::get('/dashboard/laporan',[LaporanController::class,'index'])->name('laporan-admin');
        // pengelola kos
        Route::get('/dashboard/pengelola-kos',[PengelolaKosController::class,'index'])->name('pengelola');
        Route::post('/dashboard/pengelola-kos',[PengelolaKosController::class,'create'])->name('create-pengelola');
        Route::get('/dashboard/pengelola-kos/{id}/destroy',[PengelolaKosController::class,'destroy'])->name('hapus-pengurus');
        Route::patch('/dashboard/pengelola-kos/{id}/update',[PengelolaKosController::class,'update'])->name('edit-pengurus');


        // });

// /about
Route::get('/about', [AboutController::class, 'index'])->name('about');

