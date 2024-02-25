<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class contactcontroller extends Controller
{    
    public function indexx2()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            
        ]);
        $contact = new Contact;
        $contact->name=$request['name'];
        $contact->email=$request['email'];
        $contact->phone=$request['phone'];
        
        $contact->save();
        // contact::create($request->all());
        return redirect()->route('contact')->with('success','User contact with us Successfully');
    }

}
