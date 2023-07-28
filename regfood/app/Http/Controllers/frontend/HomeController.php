<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use App\Models\backend\Product;
use App\Models\backend\Team;
use App\Models\backend\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {$data = Testimonial::all();
      $team = Team::all();
        $category=Category::all();
        // $product=Product::all();
        // return view('frontend.home',compact('product','category'));
        $product = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name')
            ->get();
          return view('frontend.home',compact('product','category','data','team')); 
    }
    function get_category(Request $r){
        $cat=$r->category;
        $product = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.name')
        ->wher('categories.name',$cat)
        ->get();
      return view('frontend.home',compact('product'));
    // dd($product);
    }
    
   
}
   

