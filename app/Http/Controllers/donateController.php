<?php

namespace App\Http\Controllers;

use App\Models\donate;
use Illuminate\Http\Request;

class donateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function page()
    {
    return view('donate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'area'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
         // signup::create($request->all());
        //return redirect()->route('signup1')->with('success','user signed up successfully');
        $file=$request->file('img');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/gallery/',$filename);
        $donate=new donate;
        $donate->img=$filename;
        $donate->path=$file;
        $donate->name=$request['name'];
        $donate->phone=$request['phone'];
        $donate->area=$request['area'];
      
        $donate->save();
        return redirect('mail2');
        // signup::create($request->all());
    //     return redirect()->route('donate')->with('success','User donate Successfully');
     }
     public function show_gallery()
    {
        $allImages=donate::all();
        $myData=compact('allImages');
        return view('image')->with($myData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show(donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit(donate $donate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy(donate $donate)
    {
        //
    }
}
