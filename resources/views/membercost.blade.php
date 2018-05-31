@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/MemberCosts-small.jpg" ></div>--}}
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
   <div class="skip">&nbsp;</div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">



            <div class="panel panel-default display">
                <div class="panel-heading">Member Costs for KineticGold</div>
                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            KineticGold is an association that is focused on the use and expansion of the KineticGold banking and Cryptocurrency platform.
                        </div>
                        <div class="form-group col-md-12 ">
                            To become a member of the association there is a one-time registration fee of $39.95.   </div>

                         <div class="form-group col-md-12 ">Registration is a single step process just
                           Provide your basic information (name, email, desired username and password and contact information)</div>

                        <div class="form-group col-md-12 ">
                           Benefits from membership in KineticGold's Association</div>
                        <div class="form-group col-md-12 ">
                           <ul>
                               <li>Members will receive a KineticGold cryptocurrency account.</li>
                               <li>Members will receive an e-wallet which can access this account</li>
                               <li>Members will receive a banking account at an offshore bank affiliated with KineticGold.</li>
                               <li>The banking account will interact directly with their cryptocurrency account.</li>
                               <li>The banking account will include a Debit card where you can access your accounts anywhere in the world through the Visa/Mastercard platform.</li>
                               <li>Members automatically qualify for KineticGold rewards program.  Rewards are automatically credited into your savings account at your offshore bank account.</li>
                               <li>Members can participate in KineticGold's profit sharing and mining program</li>
                           </ul>
                        </div>


                </div>
            </div>

        </div>
    </div>
     <div class="skip">&nbsp;</div>
       <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
           <div class="skip">&nbsp;</div>
                    <div class="skip">&nbsp;</div>
</div>
</div>
</div>
@endsection