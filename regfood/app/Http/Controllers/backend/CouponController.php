<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon=Coupon::all();
        return view('backend.admin.coupon_list',compact('coupon'));
        // dd($coupon);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coupon=Coupon::all();
        return view('backend.admin.coupon',compact('coupon')); 
    }

    public function store(Request $request)
    {
        $data=$request->all();
        Coupon::create($data);
        // dd($data);
        return redirect()->route('coupon.index');
    }

    public function show(string $id)
    {
       
        //
    }

    public function edit(string $id)
    {
        $coupon=Coupon::find($id);
        return view('backend.admin.coupon_edit',compact('coupon')); 
    }
    public function update(Request $request, string $id)
    {
        $data = Coupon::find($id);
        $data->coupon_name=$request->coupon_name;
        $data->discount=$request->discount;
        $data->status=$request->status;
        $data->save();
        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Coupon::find($id)->delete();
        return redirect()->route('coupon.index');
    }
}
