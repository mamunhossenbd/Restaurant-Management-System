<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\About;
use App\Models\backend\About_companye;
use App\Models\backend\Choosee;

class AboutController extends Controller
{
    public function index()
    {   

        $data=About::all();
        $data1=About_companye::all();
        $data2=Choosee::all();
        return view('frontend.about',compact('data','data1','data2'));
    }
}
