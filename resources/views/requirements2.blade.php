@extends('layouts.golddiggers')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
   <div class="skip">&nbsp;</div>
    <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                           <div class="kinetic600">
                               Member Requirements
                           </div>
                       </div>

            <div class="panel panel-default display">

                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="form-group col-md-12 ">
                            Individuals become members when they complete the Registration form, verify their email and pay the registration fee.
                         </div>
                         <div class="form-group col-md-12 ">
                             The Registration Fee pays for a life-time membership, with no additional costs or obligations.
                         </div>
                         <div class="form-group col-md-12 ">
                            One exclusive program available to the Gold Digger's Association is that all Members are eligible to earn the KineticGold Rewards and Profit Sharing program.
                         </div>
                         <div class="form-group col-md-12 ">
                              What do you have to do to earn KineticGold Rewards?
                         </div>
                         <div class="form-group col-md-12 ">
                              <ul>
                                    <li>Become a Gold Digger's Association member</li>
                                    <li>Make a deposit into your Kinetic Gold account</li>
                                    <li>spend your money just like with a normal bank account</li>
                              </ul>
                         </div>
                         <div class="form-group col-md-12 ">
                                Now lets see what you don't have to do.
                         </div>
                         <div class="form-group col-md-12 ">
                            <ul>
                                <li>No purchase requirements</li>
                                <li>No Sponsoring requirements</li>
                            </ul>
                         </div>
                         <div class="form-group col-md-12 ">
                               What do you have to do to earn Profit Sharing with Kinetic Gold?
                         </div>
                         <div class="form-group col-md-12 ">
                                <ul>
                                    <li>Become a member of the Gold Digger's Association- no deposit required</li>
                                    <li>Refer someone</li>
                                    <li>The more people you Refer that become members increases the number of generations that profit sharing is paid on</li>
                                        <ul>
                                            <li>1+  1st Generation</li>
                                            <li>5+  2nd Generation</li>
                                            <li>10+ 3rd Generation</li>
                                            <li>15+ 4th Generation</li>
                                            <li>20+ 5th Generation</li>
                                        </ul>
                                    <li>Someone within 5 generations (see above) of your referrals makes a deposit in their account.</li>
                                    <l1>After all deposits are what drives the Profit Sharing.</l1>
                                </ul>

                         </div>

                         <div class="form-group col-md-12 ">
                                Now lets see what you don't have to do.
                         </div>
                         <div class="form-group col-md-12 ">
                               <ul>
                                    <li>No minimum personal sales requirements</li>
                                    <li>No direct selling of products - all deposits are done through KineticGold website</li>
                                    <li>No collecting of money</li>
                                    <li>No required marketing meetings</li>
                                    <li>No minimum number of sponsered members in your organization are required to 'qualify'</li>
                                    <li>No stocking of inventory</li>
                                    <li>No purchasing of product you don't want or need</li>
                                    <li>No confusing Marketing plan</li>
                                    <li>No waiting for the check that is in the mail</li>
                                    <li>No Hidden Fees</li>
                                    <li>No hard sell - hand out a business card, let the site do the work for you</li>
                               </ul>
                         </div>
                         <div class="form-group col-md-12 ">
                                About the only way to not succeed with KineticGold is to do nothing at all.
                         </div>

                </div>
            </div>
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
        </div>
    </div>
</div>
</div>
@endsection