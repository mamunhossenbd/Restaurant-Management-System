<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'details',
        'photo',
        'offer',
    ];

}
