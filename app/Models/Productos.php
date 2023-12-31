<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto',
        'description',
        'cantidad',
        'price',
        'discount',
        'categoria',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}