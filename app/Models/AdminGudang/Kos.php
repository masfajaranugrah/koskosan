<?php

namespace App\Models\AdminGudang;

use App\Traits\UUID;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\AdminGudang\Kos;
use App\Models\AdminGudang\gender;
use App\Models\AdminGudang\Satuan;
use App\Models\AdminGudang\TypeKamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kos extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;

    protected $fillable = [
    'kategori_id',
    'gender_id',
    'satuan_id',
    'deskripsi',
    'alamat',
    'harga1',
    'harga2',
    'type_kos',
    'banner',
    'gambar','created_at','updated_at','deleted_at'];

// Change this method name to match the attribute
public function setGambarAttribute($value)
{
    $this->attributes['gambar'] = json_encode($value);
}

public $incrementing = false;

protected static function booted(): void
{
    static::creating(function (Kos $kos) {
        $kos->id = Str::uuid()->toString();
    });
}

public function kategori() {
    return $this->belongsTo(kategori::class);
}
public function gender() {
    return $this->belongsTo(gender::class);
}

    public function satuan() {
        return $this->belongsTo(Satuan::class);
    }

    public function kos() {
        return $this->hasOne(Kos::class);
    }

    public function typekamar()
    {
        return $this->hasOne(TypeKamar::class);
    }
}
