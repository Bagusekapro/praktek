<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    /** @use HasFactory<\Database\Factories\ProvinsiFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'negara_id',
    ];


    public function negara() {
        return $this->belongsTo(Negara::class);
    }

    public function kotas() {
        return $this->hasMany(Kota::class);
    }
}
