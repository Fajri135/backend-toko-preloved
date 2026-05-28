<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}