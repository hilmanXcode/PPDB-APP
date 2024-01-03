<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;
    protected $table = 'tentang';
    protected $guarded = [];
    protected $fillable = [
        'deksripsi_singkat',
        'tentang'
    ];
}
