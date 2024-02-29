<?php

namespace App\Models\AdminGudang;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaTambahan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_biaya','harga','typekamar_id','created_at','updated_at','deleted_at'];

    public function typekamar()
{
    return $this->belongsTo(TypeKamar::class);
}

}



