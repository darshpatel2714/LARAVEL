<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class mailcontroller extends Controller
{
    public function index()
    {
        // echo "hello";
        $data=['name'=>"You are signed up in our website",'data'=>"Hello Darsh"];
        $user['to']='pateldarsh456@gmail.com';
        Mail::send('mail',$data,function($messages) use($user){
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect()->route('signup')->with('success','user signed up successfully');
    }

    public function index2()
    {
        // echo "hello";
        $data=['name'=>"You are signed up in our website",'data'=>"Hello Darsh"];
        $user['to']='pateldarsh456@gmail.com';
        Mail::send('mail2',$data,function($messages) use($user){
        $messages->to($user['to']);
        $messages->subject('Youre food is donated succesfully');
        });
        return redirect('/donate')->with('success','your food is donated successfully');
    }
}
