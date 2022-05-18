<?php

namespace App\Http\Controllers;
use App\Booksdetails;
use App\Registration;
use App\Login;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $view=Booksdetails::all();
        //  $view=Booksdetails::all()->where('type','=','type');
         return view('login.userview',['view'=>$view]);
         redirect(Request::url('logindex'));
 
    }

    public function profileview(Request $request)
    {
        $reg=Session::get('value');
        $session =Registration::where('id',$reg)->get();
        // dd($session);
       
        return view('login.profile',['session'=>$session]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request,Login $login)
    {
       $id= Session::get('value');
        
        $change=Registration::find($id);
        
        $change->firstname=$request->input('firstname');
        $change->lastname=$request->input('lastname');
        $change->address=$request->input('addrs');
        $change->phnumber=$request->input('phno');
        $change->save();
       return redirect('logindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
