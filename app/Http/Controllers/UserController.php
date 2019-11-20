<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
use App\User;

class UserController extends BaseController
{
    public function user_dashboard()
    {
      
    	return view('user.user_dashboard');
    }

    public function branches()
    {
        $user_id = Auth::guard('user')->user()->id;
      
    	$branches = $this->branch->where('user_id',$user_id)->get();
    	
    	return view('user.branches',compact('branches'));
    }

    public function add_branch()
    {

        return view('user.add_branch');
    }

    public function insert_branch(Request $request)
    {
    	 $validator = Validator::make(
            $request->all(),
            array(
            'branch_name'     => 'required',
            'email'           => 'required',
            'password'        => 'required',
            'phone'           => 'required',
            )
        );
        
        if ($validator->fails()) {
            Session::flash('alert', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
            $user = $this->branch;
            $user->user_id=Auth::guard('user')->user()->id;
            $user->branch_name=$request->branch_name;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->phone=$request->phone;
            $user->save();
           return redirect('/branches')->with('success', 'Branch Added Successfully');    
    }

    public function view_feedback($id)
    {
        $feedbacks = $this->feedback->where('feedback_details.branch_id',$id)
                    ->join('branches','branches.id','feedback_details.branch_id')
                    ->select('branches.branch_name','feedback_details.*')
                    ->get();
        //dd($feedbacks);

        return view('user.view_feedback',compact('feedbacks'));
    }






}
