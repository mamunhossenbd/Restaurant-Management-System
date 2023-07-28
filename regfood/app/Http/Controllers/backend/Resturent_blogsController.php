<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Resturent_blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Resturent_blogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
         $pelam = Resturent_blog::all();
         return view('backend.admin.blog',compact('pelam'));
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $d=$request->all();

        $filename=time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$filename);
        $d['photo']=$filename;

        $filename=time().'_'.$request->bloger_photo->getClientOriginalName();
        $request->bloger_photo->move(public_path('uploads/'),$filename);
        $d['bloger_photo']=$filename;

        Resturent_blog::create($d);
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data=Resturent_blog::find($id);
       return view('backend.admin.edit_blog',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Resturent_blog::find($id)->update($request->all());
        $data=$request->all();

        $photo=$request->photo;
        if($photo)
        {
         $filename=time().'_'.$request->photo->getClientOriginalName();
         $request->photo->move(public_path('uploads/'),$filename);
         $data['photo']=$filename;
        }
        
        $bloger_photo =$request->bloger_photo;
        if($bloger_photo)
        {
            $filename=time().'_'.$request->bloger_photo->getClientOriginalName();
            $request->bloger_photo->move(public_path('uploads/'),$filename);
            $data['bloger_photo']=$filename; 
        }

        Resturent_blog::find($id)->update($data);
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Resturent_blog::find($id)->delete();
        return redirect()->route('blogs.index');
    }
}
