<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    function index() {
        return view('backend.user_login');
    }

    public function post__user_login(Request $request)
    {
    	request()->validate([

    			'email'=>'required',
    			'password'=>'required',			
    	]);

    	$credentials = $request->only('email','password');

    	if(Auth::attempt($credentials))
    	{
            return redirect()->intended('/');
    	}
        else
        {
    	return Redirect::to('/user')->with('error','You have entered invalid credentials');
    }
}
public function user_register()
{
    return view('backend.user_register');
}

public function post_user_register(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user =User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user,
            'password' => Hash::make($request->password),
        ]);
       
        return redirect('/');
    }
    public function logout()
    {
        Session()->flush();
        Auth::logout();
        return redirect('/');
    }

}

