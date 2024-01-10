<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'category_name',
        'category_slug'
    ];
    protected $guarded = ['id'];

    public function Informasi()
    {
        return $this->hasMany(Informasi::class, 'category_id', 'id');
    }
}
