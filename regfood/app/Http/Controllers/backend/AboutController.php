<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data=About::all();
        return view('backend.admin.about',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.add_about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $data=$r->all();
        $filename=time().'_'.$r->photo->getClientOriginalName();
        $r->photo->move(public_path('uploads/'),$filename);
        $data['photo']=$filename;
        About::create($data);
        return redirect()->route('ab.index');
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
        $out=About::find($id);
        return view(' backend.admin.edit_about',compact('out'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {    
         
        $data=About::find($id)->update($r->all());
        $data=$r->all();

        $photo = $r->photo;
        if($photo)
        {
            $filename=time().'_'.$r->photo->getClientOriginalName();
            $r->photo->move(public_path('uploads/'),$filename);
            $data['photo']=$filename;
        }
        
        About::find($id)->update($data);
        return redirect()->route('ab.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        About::find($id)->delete();
        return redirect()->route('ab.index');
    }
}
