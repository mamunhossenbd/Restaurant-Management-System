<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_companye extends Model
{
    use HasFactory;
    protected $fillable = [
        'headline',
        'details',
        'title',
        'description',
        
    ];
}
