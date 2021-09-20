<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'asin',
        'title',
        'imageMain',
        'price',
        'sizes',
        'colors',
        'feature_bullets',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function types(){
        return $this->hasMany(Type::class,'product_id');
    }
}