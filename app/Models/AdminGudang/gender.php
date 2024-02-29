<?php

namespace App\Models\AdminGudang;
use App\Traits\UUID;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gender extends Model
{
    use HasFactory;


    protected $fillable = ['gender','created_at','updated_at','deleted_at'];

    public $incrementing = false;

    protected static function booted(): void
    {
        static::creating(function (gender $gender) {
            $gender->id = Str::uuid()->toString();
        });
    }

    public function gender() {
        return $this->hasOne(gender::class);
    }

}
