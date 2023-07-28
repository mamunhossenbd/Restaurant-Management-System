<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Chef;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChefsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $hello= Chef::all();
        return view('backend.admin.chef',compact('hello'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.add_chef');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->all();
       $filename=time().'_'.$request->photo->getClientOriginalName();
       $request->photo->move(public_path('uploads/'),$filename);
       $data['photo']=$filename;
       Chef::create($data);
       return redirect()->route('cheff.index');
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
        $noyon=Chef::find($id);
        return view('backend.admin.edit_chef',compact('noyon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Chef::find($id)->update($request->all());
        $data =$request->all();
        $photo = $request->photo;
        if($photo)
        {
            $filename=time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/'),$filename);
            $data['photo']=$filename;
        }
        Chef::find($id)->update($data);
        return redirect()->route('cheff.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Chef::find($id)->delete();
        return redirect()->route('cheff.index');
    }
}
