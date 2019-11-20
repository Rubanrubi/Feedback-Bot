<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Validator;
use Hash;
use App\User;

class LoginController extends BaseController
{
        private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:user|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];
        //validate the request.
        //print_r('coming');exit();
        $validator = Validator::make($request->all(), $rules);
        //print_r($validator);exit();
        return $validator;
         
    }

    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    public function login_n(Request $request)
    {
    	//print_r('coming');exit();
        $this->validator($request);
       
        if(Auth::guard('user')->attempt($request->only('email','password','remember_token'))){
        	//dd('user');
            $user = auth()->guard('user')->user();

            $request->session()->put('name',$user->name);
            $request->session()->put('role',$user->roles);
            //Authentication passed...
            return redirect('/user_dashboard')->with('status','You are Logged in as Admin!');
        }
        	//dd('coming');
        //dd($request->email);
        elseif(Auth::guard('branch')->attempt($request->only('email','password'))){
        	//dd('branch');
            $user = auth()->guard('branch')->user();
            //dd($user);
            $request->session()->put('name',$user->name);
            $request->session()->put('role',$user->roles);
            //Authentication passed...
            return redirect('/feedback')->with('status','You are Logged in as Branch!');

        }
    
    
    
      
        //Authentication failed...
        return $this->loginFailed();
    }

     public function logout()
    {
        Auth::logout();
        return redirect('/')->with('status','User has been logged out!');

    }

    public function login_admin(Request $request)
    {
        //print_r('coming');exit();
        // $this->validator($request);
        
        //dd(Hash::make($request->password));
        if(Auth::guard('admin')->attempt($request->only('email','password'))){
            
            //Authentication passed...
            return redirect('/dashboard')->with('status','You are Logged in as Admin!');
        }
      
        //Authentication failed...
        return $this->loginFailed();
    }

    public function user_register(Request $request)
    {
    	 $validator = Validator::make(
            $request->all(),
            array(
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'required',
            'phone'    => 'required',
            )
        );
        
        if ($validator->fails()) {
            Session::flash('alert', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
            $user = $this->user;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->phone=$request->phone;
            $user->roles='0';
            $user->save();
           return redirect('user_dashboard')->with('success', 'User Registered Successfully');    
    }






}