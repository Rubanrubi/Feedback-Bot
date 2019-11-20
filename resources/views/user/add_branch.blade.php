@extends('layouts.user_master')

@section('title')

Add Branch | FDK BOT

@endsection
@section('content')
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Add Branch</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Branch</a></li>
        <!-- <li class="breadcrumb-item active">Validation</li> -->
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
      <!-- Panel Full Example -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Heading
            <span class="panel-desc">Here to fill the branch credentials... </span>
          </h3>
        </div>
        <div class="panel-body">

          <form method="post" action="{{url('/')}}/insert_branch" id="exampleFullForm" autocomplete="off">
            {{csrf_field()}}
            <div class="row row-lg">
              <div class="col-xl-6 form-horizontal">
                <div class="form-group row">
                  <label class="col-xl-12 col-md-3 form-control-label">Branch Name
                    <span class="required">*</span>
                  </label>
                  <div class=" col-xl-12 col-md-9">
                    <input type="text" class="form-control" name="branch_name" placeholder="Branch Name"
                      required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-xl-12 col-md-3 form-control-label">Email
                    <span class="required">*</span>
                  </label>
                  <div class="col-xl-12 col-md-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                      </span>
                      <input type="email" class="form-control" name="email" placeholder="Email"
                        required="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 form-horizontal">
                  <div class="form-group row">
                  <label class="col-xl-12 col-md-3 form-control-label">Password
                    <span class="required">*</span>
                  </label>
                  <div class="col-xl-12 col-md-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-lock" aria-hidden="true"></i>
                      </span>
                      <input type="password" class="form-control" name="password" placeholder="Password"
                        required="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-xl-12 col-md-3 form-control-label">Phone
                    <span class="required">*</span>
                  </label>
                  <div class="col-xl-12 col-md-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-signal" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone"
                        required="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group col-xl-12 text-right padding-top-m">
                <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Panel Full Example -->
      </div>
    </div>
  </div>
          <!-- Example Breadcrumb Bottom -->

    </div>
  </div>
  <!-- End Page -->
@endsection