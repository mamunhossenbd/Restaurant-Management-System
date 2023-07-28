<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Resturent_blog;

class BlogController extends Controller
{
    public function index()
    {   
        $pelam = Resturent_blog::all();
        return view('frontend.blog',compact('pelam'));
    }
}
