<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'min_stock', 
        'supplier_id', 
        'category_id'
    ];
    use HasFactory;
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function category(){
        return $this->hasOne(Category::class);
    }
}
