<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'price',
        'type',
        'main_image',
        'land_size',
        'building_size',
        'bedrooms',
        'bathrooms',
        'description',
        'facilities'
    ];

    protected $casts = [
        'facilities' => 'array',
        'price' => 'decimal:2'
    ];
}
