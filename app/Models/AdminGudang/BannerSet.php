<?php
namespace App\Models\AdminGudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSet extends Model
{
    use HasFactory;
    protected $fillable = ['judul_banner','deskripsi_banner','link_button1','link_button2','nama_button1','nama_button2','gambar','created_at','updated_at','deleted_at'];

}
