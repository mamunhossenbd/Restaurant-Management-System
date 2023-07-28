<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choosee extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'details',
        'icone',
        'headline',
        'description',
        'photo',
        
    ];
}
