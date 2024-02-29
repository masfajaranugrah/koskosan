<?php

namespace App\Models\AdminGudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class TypeKamar extends Model
{
    use HasFactory;
    protected $fillable =
    [
    'jm_kamar_dalam',
    'km_kamarkosong_dalam',
    'jm_kamar_luar',
	'km_kamarkosong_luar',
    'kos_id',
    'fasilitas_bersama_luar',
	'fasilitas_km_luar',
	'fasilitas_bersama_dalam',
	'fasilitas_km_dalam',
    'harga_thn_luar',
	'harga_bln_luar',
	'harga_thn_dalam',
    'harga_bln_dalam',
    'created_at',
    'updated_at',
    'deleted_at'
    ];

    public function kos()
    {
        return $this->belongsTo(Kos::class, 'kos_id');
    }
    public function typekamar()
    {
        return $this->hasOne(TypeKamar::class);
    }
}
