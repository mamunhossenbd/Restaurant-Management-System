<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.admin.testimonial_list', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'description' => 'required',
            
        ]);

        $validatedData=$request->all();
        $filename=time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$filename);
        $validatedData['photo']=$filename;

        Testimonial::create($validatedData);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial created successfully.');
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
    public function edit(Testimonial $testimonial)
    {
        return view('backend.admin.testimonial_edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $data=Testimonial::find($id)->update($request->all());
        $data=$request->all();
        $photo=$request->photo;
        if ($photo) {
            $filename=time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/'),$filename);
            $data['photo']=$filename;
        }
        Testimonial::find($id)->update($data);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial deleted successfully.');
    }
}
