<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    /** @use HasFactory<\Database\Factories\AlamatFactory> */
    use HasFactory;

    protected $fillable = [
        'detail',
        'desa_id'
    ];

    public function desa() {
        return $this->belongsTo(Desa::class);
    }

}
