@extends('layouts.user_master')

@section('title')

View Feedback | FDK BOT

@endsection

@section('content')

  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">View Feedback</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}/">Home</a></li>
        <li class="breadcrumb-item"><a href="#">View Feedback</a></li>
      </ol>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="http://formvalidation.io/"
          target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span>
      </a>
      </div>
    </div>

    <div class="page-content container-fluid">
      <!-- Panel Header -->
      <!-- Panel Table Tools -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Feedbacks for your Branches...</h3>
        </header>

        <div class="panel-body">
<!--           <div class="animation-example animation-hover hover" style="float: right;margin-top: -21px;">
                    <a href="{{url('/')}}/add_branch" class="btn btn-success animation-shake">Add Branch</a>
                  </div> -->
          <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Branch Name</th>
                <th>Text Area</th>
                <th>Single Choice</th>
                <th>Ratings</th>
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
              @foreach($feedbacks as $key => $feedback)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$feedback->branch_name}}</td>
                <td>{{$feedback->text_area}}</td>
                <td>{{$feedback->single_choice}}</td>
                <td>{{$feedback->rating}}</td>
              </tr>
              @endforeach  
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Tools -->
      </div>
    </div>
  
  <!-- End Page -->
@endsection