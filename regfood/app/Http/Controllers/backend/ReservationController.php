<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{//tamplate
    function store(Request $r ){
        $reservation=new Reservation();
        $reservation->name=$r->name;
        $reservation->email=$r->email;
        $reservation->phone=$r->phone;
        $reservation->date=$r->date;
        $reservation->time=$r->time;
        $reservation->guest=$r->guest;
        $reservation->save();
        return redirect()->back();
    }
    function index(){
        
        $list=Reservation::get();
        return view('backend.admin.reservation_list',compact('list'));
    }
    function create(){
        return view('backend.admin.reservation');
    }
    function add_reservation(Request $r) {
        //admin
        $reservation=new Reservation();
        $reservation->name=$r->name;
        $reservation->email=$r->email;
        $reservation->phone=$r->phone;
        $reservation->date=$r->date;
        $reservation->time=$r->time;
        $reservation->guest=$r->guest;
        $reservation->save();
        return redirect()->route('reservation_list');
    }
    function reservation_edit($id) {
        $data=Reservation::find($id);
            return view('backend.admin.reservation_edit',compact('data'));
            
    }
    function update_reservation(Request $r,$id){
        

        $data=Reservation::find($id);
        $data->name = $r->input('name');
        $data->email = $r->input('email');
        $data->phone = $r->input('phone');
        $data->date = $r->input('date');
        $data->time = $r->input('time');
        $data->guest = $r->input('guest');
        $data->update();

        return redirect()->route('reservation_list');
    }
    function reservation_delete($id) {
        Reservation::find($id)->delete();
        return redirect()->route('reservation_list');
    }
}
