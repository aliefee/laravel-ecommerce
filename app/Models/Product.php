<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'price', 'image', 'quantity'
    ];
    protected $attributes = [
        'image' => 'storage/products/product-default.png',
        'quantity' => 100,  # development!!
    ];
}
