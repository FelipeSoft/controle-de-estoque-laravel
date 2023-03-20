<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Transact extends Model
{
    protected $fillable = [
        'type',
        'quantity',
        'product_id'
    ];
    use HasFactory;
    public function products(){
        return $this->hasMany(Product::class);
    }
}
