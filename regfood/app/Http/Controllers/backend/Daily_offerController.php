<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Daily_offer;
use Illuminate\Http\Request;
use App\Http\Controllers\FileUpload;
use Illuminate\Support\Facades\File;

class Daily_offerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$list=Daily_offer::get();
        return view('backend.admin.list_daily_offer',compact('list'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.daily_offer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        // $offer = Daily_offer::create([
        //     'title' => $request->title,
        //     'details' => $request->details,
        //     'photo' => $request->photo,
        //     'offer' => $request->offer,
        // ]);
        // return redirect('dashboard');

        $data=$r->all();
        $filename=time().'_'.$r->photo->getClientOriginalName();
        $r->photo->move(public_path('uploads/'),$filename);
        $data['photo']=$filename;
        Daily_offer::create($data);
        return redirect()->route('daily_offer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    //   return view('backend.admin.list_daily_offer');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Daily_offer::find($id);
        return view('backend.admin.daily_offer_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $data=Daily_offer::find($id);
        $data->title=$r->input('title');
        $data->details=$r->input('details');
        $data->offer=$r->input('offer');

        if ($r->hasFile('photo')) {
            $destination='uploads/'.$data->photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
           $photo=$r->file('photo');
           $ex=$photo->getClientOriginalName();
           $filename=time().'_'.$ex;
           $photo->move(public_path('uploads/'),$filename);
           $data->photo=$filename;
        }
     $data->update();
        return redirect()->route('daily_offer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $data=Daily_offer::find($id)->delete(); 
      return redirect()->route('daily_offer.index');
    }
}
