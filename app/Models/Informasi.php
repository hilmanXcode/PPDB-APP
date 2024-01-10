<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $table = 'informasi';
    protected $guarded = [];

    protected $filable = [
        'judul',
        'banner_image',
        'deskripsi_informasi',
        'category_id',
    ];


}
