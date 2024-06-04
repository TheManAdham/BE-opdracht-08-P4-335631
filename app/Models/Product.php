<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id',
    ];

    public function allergies()
    {
        return $this->belongsToMany('App\Models\Allergy', 'product_allergy');
    }
}
