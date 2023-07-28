<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Category::get();
        return view('backend.admin.category_list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list=Category::get();
        return view('backend.admin.category',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $data=$r->all();
        Category::create($data);
        return redirect()->route('category.index');
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
        $data=Category::find($id);
        return view('backend.admin.category_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $data=Category::find($id);
        $data->name=$r->input('name');
        $data->update();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Category::find($id)->delete(); 
        return redirect()->route('category.index');
    }
}
