<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.login');
    }
    public function post_login(Request $request)
    {
    	request()->validate([

    			'email'=>'required',
    			'password'=>'required',			
    	]);

    	$credentials = $request->only('email','password');

    	if(Auth::attempt($credentials))
    	{
            return redirect()->intended('/dashboard');
    	}
        else
        {
    	return Redirect::to('/admin')->with('error','You have entered invalid credentials');
    }
}


    public function register()
    {
        return view('backend.register');
    }
    public function post_register(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       
        return redirect('dashboard');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('backend.dashboard');
        }
        return redirect('/admin');
    }

    public function logout()
    {
        Session()->flush();
        Auth::logout();
        return redirect('/admin');
    }
}
