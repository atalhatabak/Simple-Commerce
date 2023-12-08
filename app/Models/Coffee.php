<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'brand',
        'model',
        'price',
        'type',
        'coffeebean',

    ];
}
