<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MakananHarianDietPerempuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'waktu',
        'jenis',
        'jumlah',
        'keterangan',
    ];
}
