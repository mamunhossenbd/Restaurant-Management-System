<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use App\Models\backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    { 
        // $category=Category::all();
        // $list=Product::all();
        // return view('backend.admin.product_list',compact('list','category'));
        // dd($category);
        $list = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.name')
        ->get();
      return view('backend.admin.product_list',compact('list'));
    }

    public function create()
    {
        $category=Category::all();
        return view('backend.admin.product',compact('category'));
    }

    public function store(Request $r)
    {
        $data=$r->all();
        $filename=time().'_'.$r->photo->getClientOriginalName();
        $r->photo->move(public_path('uploads/'),$filename);
        $data['photo']=$filename;
        Product::create($data);
        return redirect()->route('product.index');
        // dd($data);

        // $photoName=time().'_'.$r->photo->getClientOriginalName();
        // $r->photo->move(public_path('uploads/'),$photoName);
        // $product=new Product;
        // $product->category_id=$r->category_id;
        // $product->title=$r->title;
        // $product->details=$r->details;
        // $product->price=$r->price;
        // $product->photo=$photoName;
        // $product->save();
        // return redirect()->route('product.index');

    }   


    public function show(string $id)
    {
        //
    }
 

    public function edit(string $id)
    {

        $data=Product::find($id);
        //     return view('backend.admin.edit_product',compact('data'));
        //     dd($data);

        $data = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.id', 'categories.name')
            ->where('products.id', $id)
            ->first();
            // dd($data);
            $category=Category::all();
        return view('backend.admin.product_edit', compact('data','category'));
    }

    public function update(Request $request, string $id)
    {
        $data = Product::find($id);
        $data->title = $request->input('title');
        $data->details = $request->input('details');
        $data->price = $request->input('price');
        $data->category_id = $request->input('category_id');
    
        if ($request->hasFile('photo')) {
            $destination = 'uploads/' . $data->photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $photo = $request->file('photo');
            $filename = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('uploads/'), $filename);
            $data->photo = $filename;
        }
        $data->save();
    
        return redirect()->route('product.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Product::find($id)->delete(); 
        return redirect()->route('product.index');
    }
}
