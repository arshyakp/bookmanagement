<?php

namespace App\Http\Controllers;
use App\Login;
use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('Registration.regi');
    }

    public function logindex()
    {
       
     return view('login.login');
    }

    public function logredirect()
    {
     return view('login.loginpage');
    }
    
    public function adminredirect()
    {
     return view('admin.adminpage');
    }

    public function error()
    {
     return view('admin.error');
    }
    public function logout(Request $request)
    {
       
        $request->session()->flush('value');

        return redirect('/login');
    }
    public function adminLogout(Request $request)
    {
       
        $request->session()->flush('value');

        return redirect('/login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $v = $request->validate([
        //     'firstname' => 'required|min:3|max:50',
        //     'lastname'=>'required',
        //     'addrs' => 'required',
        //     'phno' => 'required'
        // ]);
        

        $reg=new Registration();
        $reg->firstname=$request->input('firstname');
        $reg->lastname=$request->input('lastname');
        $reg->address=$request->input('addrs');
        $reg->phnumber=$request->input('phno');
        if($reg->save())
        {
            $id=$reg->id;
            {
                $data=array('reg_id'=>$id,
                             'email'=>$request->input('email'),
                             'password'=>$request->input('password'),
                             'type'=>$request->input('type')
                           );
            Login::insert($data);
            }
        }
    }
    public function login(Request $request )
    {
$id=$request->id;
        $email = $request->email;
        $password = $request->password;
        $type = $request->type;
        $data = Login::where('email',$email)->first();
        $data->password=$password;
        if(count($data)>0){ 
            
            if($data->type=="user"){
                Session::put('value',$data->reg_id);
                $log=Session::get('value');
                
                // Session::put('email',$data->email);
                // Session::put('password',$data->password);
                // Session::put('type',$data->type);
                // Session::put('login',TRUE);
                return redirect('logindex');
            }
             elseif($data->type=="admin")
            {
                return redirect('createform');
                
            }
            }
        else 
        {
            return redirect('error');
        }
        
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
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
