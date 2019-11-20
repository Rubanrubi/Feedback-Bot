<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Branch;
use App\Feedback;

class BaseController extends Controller
{
    //
      public function __construct(User $user,Branch $branch,Feedback $feedback){

      	$this->user = $user;
      	$this->branch = $branch;
      	$this->feedback = $feedback;
      	
      }
}