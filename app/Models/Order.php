<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'u_name',
        'u_surname',
        'u_mail',
        'u_city',
        'u_address',
        'u_postal',
        'cart'
    ];
    protected $casts = [
        'cart' => 'array',
    ];

}
