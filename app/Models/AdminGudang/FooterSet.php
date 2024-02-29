<?php

namespace App\Models\AdminGudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSet extends Model
{
    use HasFactory;
    protected $fillable = ['copyright','created_at','updated_at','deleted_at'];
}
