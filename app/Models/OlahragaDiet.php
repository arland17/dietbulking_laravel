<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OlahragaDiet extends Model
{
    use HasFactory;

    protected $fillable = [
        'activities',
        'schedule',
        'notes',
    ];
}
