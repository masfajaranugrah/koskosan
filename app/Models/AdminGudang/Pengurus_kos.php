<?php

namespace App\Models\AdminGudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus_kos extends Model
{
    use HasFactory;
    protected $fillable = ['nama','deskripsi', 'link_whatsapp','gambar','created_at','updated_at','deleted_at'];

}
