<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Choosee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChooseesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $kutta=Choosee::all();
        return view('backend.admin.choss',compact('kutta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.add_choss');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $filename=time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$filename);
        $data['photo']=$filename;
        Choosee::create($data);
        return redirect()->route('chosen.index');

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
        $dat= Choosee::find($id);
        return view('backend.admin.edit_choss',compact('dat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Choosee::find($id)->update($request->all());
        $data=$request->all();

        $photo = $request->photo;
        if($photo)
        {
            $filename=time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/'),$filename);
            $data['photo']=$filename;
        }
        
        Choosee::find($id)->update($data);
        return redirect()->route('chosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Choosee::find($id)->delete();
        return redirect()->route('chosen.index');
    }
}
