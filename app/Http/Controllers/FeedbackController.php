<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
use App\User;

class FeedbackController extends BaseController
{
    public function feedback()
    {
    	return view('user.feedback');
    }

    public function submit_feedback(Request $request)
    {
    	 // $validator = Validator::make(
      //       $request->all(),
      //       array(
      //       'feedback'     => 'required',
      //       'branch_id'    => 'required',
      //       )
      //   );
        
      //   if ($validator->fails()) {
      //       Session::flash('alert', $validator->messages()->first());
      //       return redirect()->back()->withInput();
      //   }
            $feedback = $this->feedback;
            $feedback->branch_id=Auth::guard('branch')->user()->id;;
            $feedback->text_area=$request->text_area;
            $feedback->single_choice=$request->single_choice;
            $feedback->rating=$request->rating;
            $feedback->save();
           return back()->with('success', 'Customer Rated Successfully');    
    }

}