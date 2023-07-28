<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Waiter;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function index()
    {
        $waiter=Waiter::all();
        return view('backend.admin.waiter_list',compact('waiter'));
    }

    public function create()
    {
        return view('backend.admin.waiter');
    }

    public function store(Request $request)
    {
        $waiter=$request->all();
        $filename=time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$filename);
        $waiter['photo']=$filename;
        Waiter::create($waiter);
        return redirect()->route('waiter.index');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $waiter=Waiter::find($id);
        return view('backend.admin.waiter_edit',compact('waiter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Waiter::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->status = $request->input('status');
    
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
    
        return redirect()->route('waiter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Waiter::find($id)->delete(); 
        return redirect()->route('waiter.index');
    }
}
