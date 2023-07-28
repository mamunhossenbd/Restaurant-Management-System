<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $table=Table::all();
        return view('backend.admin.table_list',compact('table'));
    }

    public function create()
    {
        $table=Table::all();
        return view('backend.admin.table',compact('table'));
        return redirect()->route('table.index');
    }

    public function store(Request $request)
    {
        $table=$request->all();
        Table::create($table);
        return redirect()->route('table.index');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
       $table=Table::find($id);
       return view('backend.admin.table_edit',compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table = Table::find($id);
        $table->table_name=$request->table_name;
        $table->status=$request->status;
        $table->save();
        return redirect()->route('table.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Table::find($id)->delete();
        return redirect()->route('table.index');
    }
}
