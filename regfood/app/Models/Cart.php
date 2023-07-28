<?php

namespace App\Models;

use App\Models\backend\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'quntity',
    ];
function card_data(){
    
    return $this->belongsTo(Product::class,'product_id','id');
}

}   
