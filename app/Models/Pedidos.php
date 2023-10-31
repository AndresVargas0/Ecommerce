<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'producto',
        'producto_id',
        'description',
        'cantidad',
        'price',
        'ubication',
    ];
}
