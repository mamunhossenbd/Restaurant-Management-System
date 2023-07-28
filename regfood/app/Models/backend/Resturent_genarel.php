<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturent_genarel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'banner',
        'logo',
        'email',
        'phone',
        'address',
        'map',
        'mission',
        'vission',
        'goles',
    ];
}
