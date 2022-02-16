<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'price', 'category_id'];


    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
