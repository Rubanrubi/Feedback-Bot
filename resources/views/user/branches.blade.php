@extends('layouts.user_master')

@section('title')

Branches | FDK BOT

@endsection
@section('content')
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Branch List</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}/">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Branch List</a></li>
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
          <h3 class="panel-title">Your Branches...</h3>
        </header>

        <div class="panel-body">
          <div class="animation-example animation-hover hover" style="float: right;margin-top: -21px;">
                    <a href="{{url('/')}}/add_branch" class="btn btn-success animation-shake">Add Branch</a>
                  </div>
          <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
            <thead>
              <tr>
                <th>Branch Id</th>
                <th>Branch Name</th>
                <th>Email</th>
                <th>Phone</th>
                <!-- <th>Date Of Admission</th> -->
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($branches as $branch)
              <tr>
                <td>{{$branch->id}}</td>
                <td>{{$branch->branch_name}}</td>
                <td>{{$branch->email}}</td>
                <td>{{$branch->phone}}</td>
                <!-- <td>2014/06/13</td> -->
                <td><a href="{{url('/')}}/view_feedback/{{$branch->id}}" class="btn btn-outline btn-primary">View Feedback</a></td>
              </tr>
              @endforeach  
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Tools -->
      </div>
    </div>
  </div>
          <!-- Example Breadcrumb Bottom -->

    </div>
  </div>
  <!-- End Page -->
@endsection