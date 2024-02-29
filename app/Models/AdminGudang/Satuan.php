<?php

namespace App\Models\AdminGudang;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Satuan extends Model
{
    use HasFactory;
    protected $fillable = ['universitas','fakultas','created_at','updated_at','deleted_at'];
    public $incrementing = false;

    protected static function booted(): void
    {
        static::creating(function (Satuan $satuan) {
            $satuan->id = Str::uuid()->toString();
        });
    }

    public function satuan() {
        return $this->hasOne(Satuan::class);
    }
}
