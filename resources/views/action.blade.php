@extends('layouts.blank')

@section('content')

        <div style="z-index:-5; top:0px; left:0px; position:absolute; border:black 2px solid; height:500px; width:900px; background-attachment:fixed; background-size:60% 55%; background-image:  url({{$imageUrl}}); ">
            <div class="action ">
              <p>{{$message}}</p>
            </div>
            <div class="action2 ">
                <p>{{$message2}}</p>
            </div>
       </div>
            <div style=" position:absolute; top:100px; z-index:12; font-size:36px; left:1220px; width:300px">
                Free Information   Instant Access
            </div>
        <div style=" height:800px;width:602px; top:0px; left:900px; position:absolute;">

            <div style="border:blue 2px solid; height:355px;width:600px;   position:relative; top:0px; font-size:24pt;">
                   <img src="{{$image2}}" height="350px">

            </div>
            <div style="border:green 2px solid; height:445px;width:600px;   position:relative;">
              <div class="container-fluid">
                  <div class="row">
                      <div style="width:600px; ">
                          <div class="panel panel-default">
                              <div class="panel-heading message2 center" >Get Started Today!</div>
                              <div class="panel-body">
                                  <form class="form-horizontal" role="form" method="POST" action="/register">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <div class="form-group">
                                          <label class="col-md-4 control-label">First Name</label>
                                          <div class="col-md-6">
                                              <input type="text" class="form-control" name="first_name" value="">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">Last Name</label>
                                          <div class="col-md-6">
                                              <input type="text" class="form-control" name="last_name" value="">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">E-Mail Address</label>
                                          <div class="col-md-6">
                                              <input type="email" class="form-control" name="email" value="">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">User Name</label>
                                          <div class="col-md-6">
                                              <input type="text" class="form-control" name="username" value="">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">Password</label>
                                          <div class="col-md-6">
                                              <input type="password" class="form-control" name="password">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">Confirm Password</label>
                                          <div class="col-md-6">
                                              <input type="password" class="form-control" name="password_confirmation">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-md-6 col-md-offset-4">
                                              <button type="submit" class="btn btn-primary">
                                                  Get Started Free
                                              </button>
                                          </div>
                                      </div>
                                  </form>

                              </div>

                          </div>
                      </div>
                  </div>
              </div>
            </div>

        </div>
        <div style="z-index:10; border:blue 2px solid; height:300px;width:900px; top:500px; left:0px; position:absolute;">

            <div style="z-index:12; font-size:16pt; color:Blue; left:250px; position:relative;">Success is designed into the System</div>
            <div style="z-index:12; left:150px; position:relative;">
             <ul style="font-size:12pt; font-weight:bold;">
                    <li>No minimum personal sales requirements</li>
                    <li>No direct selling of products - all sales are done through the site</li>
                    <li>No collecting of money</li>
                    <li>No required marketing meetings</li>
                    <li>No minimum number in your organization to 'qualify' for ALL Bonuses</li>
                    <li>No stocking of inventory</li>
                    <li>No purchasing of product you don't want or need</li>
                    <li>No confusing Marketing plan</li>
                    <li>No waiting for the check that is in the mail</li>
                    <li>No Hidden Fees</li>
                    <li>No hard sell - hand out a business card, let the site do the work for you</li>
               </ul>
             </div>
        </div>
@endsection