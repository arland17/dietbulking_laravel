<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OlahragaDietCalisthenics extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'category',
        'exercises',
        'notes',
    ];
}
