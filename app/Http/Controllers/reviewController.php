<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx()
    {
        return view('review');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'email'=>'required',
            'phone'=>'required',
            'rate'=>'required',
            'feed'=>'required',
        ]);
        $review = new Review;
        $review->name=$request['name'];
        $review->email=$request['email'];
        $review->phone=$request['phone'];
        $review->rate=$request['rate'];
        $review->feed=$request['feed'];
        $review->save();
        // contact::create($request->all());
        return redirect()->route('review')->with('success','User Submited Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, review $review)
    {
        //
    }
    public function view()
    {
           $allrecords=Review::all();
           return view('viewrev',compact('allrecords'));
    }
    public function del(Request $req)
    {
        $rec=Review::find($req->id)->delete();
        return redirect('viewrev');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(review $review)
    {
        //
    }
}
