@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Requirements for Referral Bonuses</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            There are two types of registration statuses for clients of Eco-nomix.  Registered and Member.
                        </div>
                        <div class="form-group col-md-12 ">
                            Both types are eligible to earn bonuses by referring clients to Eco-nomix.  However, to receive the bonuses, you must be a member and have received the Eco-nomix debit card.

                        </div>
                        <div class="form-group col-md-12 ">
                           A 10% referral bonus is paid on all the purchases of eco-nomix products by Registered or Member clients that you have personally referred.
                        </div>
                        <div class="form-group col-md-12 ">
                           A 4% referral bonus is paid on all the purchases of eco-nomix products by 2nd Generation Registered or Member Clients. (Those that were referred by your personally referred clients.)
                        </div>
                        <div class="form-group col-md-12 ">
                           A 4% referral bonus is paid on all the purchases of eco-nomix products by 3rd Generation Registered or Member Clients. (You've got the idea!)

                        </div>
                        <div class="form-group col-md-12 ">
                            A 4% referral bonus is paid on all the purchases of eco-nomix products by 4th Generation Registered or Member Clients. (Now this is getting interesting)

                        </div>
                         <div class="form-group col-md-12 ">
                            A 4% referral bonus is paid on all the purchases of eco-nomix products by 5th Generation Registered or Member Clients. (Wow!!!)
                         </div>
                         <div class="form-group col-md-12 ">
                            That's right at least a 4% referral fee on all the purchases made by 5 generations of referrals.
                         </div>

                         <div class="form-group col-md-12 ">
                                Now lets let you know what you don't have to do.
                         </div>
                         <div class="form-group col-md-12 ">
                               <ul>
                                    <li>No minimum personal sales requirements</li>
                                    <li>No direct selling of products - all sales are done through the site</li>
                                    <li>No collecting of money</li>
                                    <li>No required marketing meetings</li>
                                    <li>No minimum number in your organization to 'qualify'</li>
                                    <li>No stocking of inventory</li>
                                    <li>No purchasing of product you don't want or need</li>
                                    <li>No confusing Marketing plan</li>
                                    <li>No waiting for check's in the mail</li>
                                    <li>No Hidden Fees</li>
                                    <li>No hard sell - hand out a business card, let the site do the work for you</li>
                               </ul>
                         </div>


                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection