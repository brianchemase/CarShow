<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'manufacturer',
        'model',
        'yom',
        'engine_capacity',
        'fuel_type',
        'transmission',
        'body_style',
        'condition',
        'seats',
        'image',
        'price',
        'availability'
    ];
    use HasFactory;
}
