<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\backend\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('backend.admin.contact_list', compact('contacts'));
    }

    public function store(Request $request)
    {

         $v=$request->all();

         Contact::create($v);

        return Redirect()->back()->with('success', 'Contact Submit successfully.');
    }

    public function delete($id)
    {
        Contact::find($id)->delete();

        return redirect()->route('contact_list');
    }
}
