<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    use HasFactory;

    protected $fillable = [
        'snack',
        'harga',
        'stok',
        'image',
        'updated_at',
        'created_at',

    ];
}
