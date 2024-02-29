<?php

namespace App\Models\AdminGudang;
use App\Traits\UUID;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;


    protected $fillable = ['nama_kos','created_at','updated_at','deleted_at'];

    public $incrementing = false;

    protected static function booted(): void
    {
        static::creating(function (Kategori $kategori) {
            $kategori->id = Str::uuid()->toString();
        });
    }

    public function kategori() {
        return $this->hasOne(Kategori::class);
    }

}
