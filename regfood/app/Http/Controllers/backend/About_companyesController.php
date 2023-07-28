<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\About_companye;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About_companyesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
      $data=About_companye::all();
      return view('backend.admin.aboutcompany',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.add_aboutcompany');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $patailam = $request->all();
        About_companye::create($patailam);
        return redirect()->route('abcom.index');

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
        $take=About_companye::find($id);
        return view('backend.admin.edit_aboutcompany',compact('take'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        About_companye::find($id)->update($request->all());
        return redirect()->route('abcom.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        About_companye::find($id)->delete();
        return redirect()->route('abcom.index');
    }
}
