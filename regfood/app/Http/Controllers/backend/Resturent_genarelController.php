<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Resturent_genarel;
use Illuminate\Http\Request;

class Resturent_genarelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genarel = Resturent_genarel::all();
        return view('backend.admin.genarel_list', compact('genarel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.genarel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $filename=time().'_'.$request->logo->getClientOriginalName();
        $request->logo->move(public_path('uploads/'),$filename);
        $data['logo']=$filename;

        $filename=time().'_'.$request->banner->getClientOriginalName();
        $request->banner->move(public_path('uploads/'),$filename);
        $data['banner']=$filename;

        Resturent_genarel::create($data);

        return redirect()->route('genarel.index')->with('success', 'Genarel information created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resturent_genarel $genarel)
    {
        return view('backend.admin.genarel_show', compact('genarel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resturent_genarel $genarel)
    {
        return view('backend.admin.genarel_edit', compact('genarel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Resturent_genarel::find($id)->update($request->all());
        $data=$request->all();
        $logo=$request->logo;
        if ($logo) {
            $filename=time().'_'.$request->logo->getClientOriginalName();
            $request->logo->move(public_path('uploads/'),$filename);
            $data['logo']=$filename;
        }

        $banner=$request->banner;
        if ($banner) {
            $filename=time().'_'.$request->logo->getClientOriginalName();
            $request->logo->move(public_path('uploads/'),$filename);
            $data['banner']=$filename;
        }
        Resturent_genarel::find($id)->update($data);

        return redirect()->route('genarel.index')->with('success', 'Genarel information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resturent_genarel $genarel)
    {
        $genarel->delete();

        return redirect()->route('genarel.index')->with('success', 'Genarel information deleted successfully.');
    }
}
