@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Referral Links</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            All Eco-nomix Members have the opportunity to refer new clients to the Eco-nomix family simply by registering.
                        </div>
                       <div class="form-group col-md-12 ">
                            Use the Referral Link below to help grow your organization and your income possibilities.  Simply encourage potential clients to access the site using your referral link.  When they do, the site knows who referred them and if they register, you will receive the credit of 'Sponsoring' them . They will have full access to the site and can determine first if they want to complete their registeration or not. </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Referral Link</label>
                            <div class="col-md-6">
                                {{$ReferralLink}}
                            </div>
                        </div>
                </div>
            </div>
            <div class="form-group col-md-12 standout">
                  Suggestions:  These links can be placed on business cards, added to emails,  facebook, tweets,  anyway you want to get the word out.  If anyone uses one of these links.  You get the credit
            </div>
        </div>
    </div>
</div>
</div>
@endsection