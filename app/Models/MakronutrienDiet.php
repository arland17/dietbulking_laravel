<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MakronutrienDiet extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];
}
