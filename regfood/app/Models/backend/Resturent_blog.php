<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturent_blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'bloger_name',
        'photo',
        'bloger_photo',
        'date',
        'title',
        'details',
        'like',
        
    ];
}
