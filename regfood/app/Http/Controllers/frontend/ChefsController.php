<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Chef;

class ChefsController extends Controller
{
    public function index()
    {   
        $hello= Chef::all();
        return view('frontend.chefs',compact('hello'));
    }
}
