<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformasiKaloriBulkingPerempuan extends Model
{
    use HasFactory;
       
    protected $fillable = [
        'total_kalori',
        'makanan',
        'snack',
        'tambahan',
    ];
}
