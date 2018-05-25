@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/MemberCosts-small.jpg" ></div>--}}

    <div class="row">
        <div class="col-md-8 col-md-offset-2">



            <div class="panel panel-default display">
                <div class="panel-heading">Member Costs for Kinetic Gold</div>
                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            Kinetic Gold is an association that is focused on the use and expansion of the Kinetic Gold banking and Cryptocurrency platform.
                        </div>
                        <div class="form-group col-md-12 ">
                            To become a member of the association there is a one-time registration fee of $39.95.   </div>

                         <div class="form-group col-md-12 ">Registration is a single step process just
                           Provide your basic information (name, email, desired username and password and contact information)

                        <div class="form-group col-md-12 ">
                           Benefits from membership in Kinetic Gold's Association</div>
                        <div class="form-group col-md-12 ">
                           <ul>
                               <li>Members will receive a Kinetic Gold cryptocurrency account.</li>
                               <li>Members will receive an e-wallet which can access this account</li>
                               <li>Members will receive a banking account at an offshore bank affiliated with Kinetic Gold.</li>
                               <li>The banking account will interact directly with theircryptocurrency account.</li>
                               <li>The banking account will include a Debit card where you can access your accounts anywhere in the world through the Visa/Mastercard platform.</li>
                               <li>Members automatically qualify for Kinetic Gold rewards program.  Rewards are automatically credited into your savings account at your offshore bank account.</li>
                               <li>Members can participate in Kinetic Gold's profit sharing and mining program</li>
                           </ul>
                        </div>

                         <div class="form-group col-md-12 ">
                            After Login, if 'Register' still appears in the upper right hand corner, you have yet to complete your registration.
                         </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection