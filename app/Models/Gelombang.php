<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gelombang extends Model
{
    use HasFactory;
    protected $table = 'gelombang';
    protected $guarded = [];

    protected $fillable = [
        'gelombang',
        'status_gelombang'
    ];
}
