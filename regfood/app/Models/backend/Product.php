<?php

namespace App\Models\backend;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'details',
        'category_id',
        'price',
        'photo',
    ];
    function cart_data(){
        
        return $this->hasMany(Cart::class);
    }
}
