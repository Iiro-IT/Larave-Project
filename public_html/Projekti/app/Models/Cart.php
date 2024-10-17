<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cartTable'; // Specify the table name

    protected $fillable = [
        'name',
        'price',
    ];
}

