@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Member Discounts</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            There are two types of registration statuses for clients of Eco-nomix.  Registered and Member.
                        </div>
                        <div class="form-group col-md-12 ">
                            Both types will receive a discount on products from the Suggested Retail Price.  The Registered client will receive between 5-10% discount from the suggested Retail Price.  The Member will receive between 10-30% discount from the suggested Retail Price.
                        </div>
                        <div class="form-group col-md-12 ">
                            At Eco-nomix we are focused on giving the best discounts possible on our products to our members.  There is a limitation because we are also paying out a high percentage of the sales price in referral fees.  At Eco-nomix, we feel it will be much more financially beneficial to the member to give a high referral fee from the sales from the member's organization.
                            When you consider that we are paying out referral fees for 5 generations, the amount in discounts and referral fees is pretty amazing.

                        </div>
                        <div class="form-group col-md-12 ">
                        </div>
                        <div class="form-group col-md-12 ">
                        </div>
                        <div class="form-group col-md-12 ">
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection