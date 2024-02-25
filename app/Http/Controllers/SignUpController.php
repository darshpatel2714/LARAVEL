<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Signup;
use Session;
class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('signup');
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
            'email'=>'required',
            'password'=>'required',
            'repeatpassword'=>'required',
        ]);
        $signup = new Signup;
        $signup->name=$request['name'];
        $signup->email=$request['email'];
        $signup->password=$request['password'];
        $signup->repeatpassword=$request['repeatpassword'];
        $signup->save();
        // signup::create($request->all());
        return redirect('mail');
		
    }
    public function view()
    {
           $allrecords=signup::all();
           return view('view',compact('allrecords'));
    }

    public function login(Request $request)
   
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12',
        ]);
        $userFound= signup::where('email',"=",$request->email)->first();
        if($userFound)
        {
            
             if ($request->password == $userFound->password)
             {
  //              return $userFound;
               $request->session()->put('signup', $userFound->id);
                 return redirect('dashboard');
            }
             else
             {
             return "wrong";
            }
        }
            else
            {
                return "wrong";
            }
   
}



public function dashboard(Request $request)
    {
        //return "<h1 style='color:white;background-color:navy'>Welcome to dashboard</h1>";
        $myData = array();
        if (Session()->has('signup'))
        {
            $myData = signup::where('id',"=", Session()->get('signup'))->first();            
        }
        return view('dashboard', compact('myData'));
    }
public function update(Request $request)
    {
        $rec=signup::find($request->id);
        $rec->name=$request->name;
        $rec->email=$request->email;
        $rec->save();
        return redirect('view');
    }
    public function logout()
    {
        if (Session()->has('signup'))
        {
            Session()->pull('signup');
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function show(Signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rec=signup::where('id',"=",$id)->first();
        return view('update',compact('rec'));
        // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }
    public function del(Request $req)
    {
        $rec=Signup::find($req->id)->delete();
        return redirect('view');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signup $signup)
    {
        //
    }
}
