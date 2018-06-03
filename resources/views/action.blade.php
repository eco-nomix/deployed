@extends('layouts.blank')

@section('content')


       <div style="z-index:-5; top:0px; left:0px; position:absolute; height:500px; width:900px;" >
          <img src="{{$imageUrl}}" width="900">
          <div class="Kineticaction" style="z-index:10; ">
               <p>{{$message}}</p>
          </div>
          <div class="Kineticaction2" style="z-index:10; ">
               <p>{{$message2}}</p>
          </div>
       </div>

        <div style=" position:absolute; top:100px; z-index:12; font-size:36px; left:1280px; width:300px">
            Free Information   Instant Access
        </div>
        <div style=" height:800px;width:502px; top:0px; left:900px; position:absolute;">

            <div style=" height:500px;width:500px;   position:relative; left:-50px; top:0px;">
                   <img src="{{$image2}}" height="530px">

            </div>
            <div style=" height:490px;width:500px;   position:relative;">
              <div class="container-fluid">
                  <div class="row">
                      <div style="width:500px; height:508px;border:black 2px solid; ">
                          <div class="panel panel-default">
                              <div class="panel-heading message2 center" >Get Started Today!</div>
                              <div class="panel-body">

                                  <form class="form-horizontal" role="form" method="POST" action="/register">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <div class="form-group">
                                           <div class="col-md-6">
                                               &nbsp;
                                           </div>
                                      </div>
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
                                          <label class="col-md-4 control-label">New User Name</label>
                                          <div class="col-md-6">
                                              <input type="text" class="form-control" name="username" value="">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">New Password</label>
                                          <div class="col-md-6">
                                              <input type="password" class="form-control" name="password">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">Confirm New Password</label>
                                          <div class="col-md-6">
                                              <input type="password" class="form-control" name="password_confirmation">
                                          </div>
                                      </div>
                                      <div class="form-group">

                                          <div class="col-md-6">
                                               &nbsp;
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
         <div style="z-index:10; height:160px;width:900px; top:500px; left:0px; position:absolute; background:white;">
            <div style="z-index:12; height:160px; width:160px; top:0px; left:0px; position:relative; ">
               <img src="../images/{{$user_pic}}" width="160">
            </div>
            <div style="z-index:14; border:black 2px solid;height:160px; width:740px; top:0px; left:160px; position:absolute; ">
                 <div class="form-group">
                      <div class="col-md-12" style="font-size:20px; font-weight:bold;">
                         {{$member_story}}
                      </div>
                 </div>
            </div>
         </div>
        <div style="z-index:10; border:black 2px solid; height:348px;width:900px; top:660px; left:0px; position:absolute; background:white;">

            <div style="z-index:12; font-size:20pt; color:Blue; left:50px; position:relative;">Banking with the Security and Opportunity of Cryptocurrency</div>
            <div style="z-index:12; left:50px; width:750px; position:relative;">
             <ul style="font-size:20pt; font-weight:bold; color:darkgreen;">
                    <li>10% Reward for every Deposit</li>
                    <li>No Change in your Banking Habits</li>
                    <li>No purchasing of product you don't want or need</li>
                    <li>No Hidden Fees</li>
                    <li>No confusing Marketing plan</li>
                    <li>Easy qualification for Profit-Sharing</li>
                    <li>Mine Gold without Computers</li>

               </ul>
             </div>
        </div>
@endsection