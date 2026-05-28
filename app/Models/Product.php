<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Tambahkan baris ini di atas

class Product extends Model
{
    use HasFactory; 
    protected $table = 'products';
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}