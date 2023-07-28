<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
        $product = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name')
            ->get();
        return view('frontend.menu', compact('product'));
        // dd($product);
    }
    function cartmodel($id)
    {
        $product = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name')
            ->where('products.id', $id)
            ->first();
        //     // dd($product);
        return view('frontend.cart', compact('product'));
    }

    function addcart(Request $r, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $product_id = $id;
            $quntity = $r->quntity;
            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->product_id = $product_id;
            $cart->quntity = $quntity;
            $cart->save();
            return redirect()->route('menu');
        } else {
            return redirect()->route('login');
        }
    }


    function cart_view($id)
    {
        $count = Cart::where('user_id', $id)->count();
        $data = Cart::all()->where('user_id', $id);
        return view('frontend.cart_view', compact('data', 'count'));
        // dd($data);
    }

    function remove($id)
    {
        $data = Cart::find($id)->delete();
        return redirect()->back();
        // dd($data);
    }

    function coupon_apply(Request $r) {
        $check=Coupon::where('coupon_name',$r->coupon_name)->first();
        // dd($check);
        if ($check) {
            Session::put('coupon',[
                'coupon_name'=>$check->coupon_name,
                'discount'=>$check->discount,
            ]);
            return redirect()->back()->with('success','Successfully coupon apply');
        }else{
            return redirect()->back()->with('error','You have entered invalid coupon');
        }

    }

    function checkout_view(Request $r)
    {
        $total = $r->input('total');
        $user_id = $r->input('user_id');
        // dd($total,$user_id);
        return view('frontend.checkout_view',compact('total','user_id'));
    }
    //order
    function order(Request $r) {
        $customer=new Customer();
        $user_id=$customer->user_id=$r->user_id;
        $customer->first_name=$r->first_name;
        $customer->last_name=$r->last_name;
        $customer->email=$r->email;
        $customer->phone=$r->phone;
        $customer->district=$r->district;
        $customer->city=$r->city;
        $customer->apartment=$r->apartment;
        $customer->zip=$r->zip;
        $customer->aditional_information=$r->aditional_information;
        $customer->amount=$r->total;
        $customer->save();
        $cart_delete = Cart::where('carts.user_id',$user_id)->delete();
        // dd($data);
        if (Session::has('coupon')) {
            session()->forget('coupon');
        }
        return redirect()->route('menu')->with('success',' order Successfull');
    }
    function order_list(){

        $order_list=Customer::all();
        return view('backend.admin.order_list',compact('order_list'));
        // dd($order_list);
    }
    function edit_order( $r) {
        $order_edit=Customer::find($r);
        return view('backend.admin.order_edit',compact('order_edit'));
        // dd($data->first_name);
     }
     function update_order (Request $r,$id) {
        
        $data = Customer::find($id);
        $data->first_name = $r->input('first_name');
        $data->last_name = $r->input('last_name');
        $data->phone = $r->input('phone');
        $data->email = $r->input('email');
        $data->district = $r->input('district');
        $data->city = $r->input('city');
        $data->apartment = $r->input('apartment');
        $data->amount = $r->input('amount');
        $data->status = $r->input('status');
        $data->zip = $r->input('zip');
        $data->aditional_information = $r->input('aditional_information');
        $data->user_id = $r->input('user_id');
        $data->save();
    
        return redirect()->route('order_list');
     }
     function delete_order($id){
        
        $data=Customer::find($id)->delete(); 
        return redirect()->route('order_list');
     }

}
