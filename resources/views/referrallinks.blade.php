@extends('layouts.default')

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
                                        Referral Links
                </div>
            </div>
            <div class="panel panel-default display">

                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            All KineticGold Members have the opportunity to refer new clients to the KineticGold family.
                        </div>
                        <div class="form-group col-md-12 ">
                            Once registered and logged in the Referral Link below will show 'Your Referral Link'.
                        </div>
                       <div class="form-group col-md-12 ">
                            Use the Referral Link below to help grow your organization and your income possibilities.
                            Simply encourage potential clients to initially access the site using your referral link.
                            When they do, the site knows who referred them and if they register, you will receive the
                            credit of 'Sponsoring' them . They will have full access to the site and can determine
                            first if they want to complete their registeration or not. </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Referral Link</label>
                            <div class="col-md-6">
                                {{$ReferralLink}}
                            </div>
                        </div>
                </div>
            </div>
            <div class="form-group col-md-12 standout">
                  Suggestions:  These links can be placed on business cards, added to emails,  facebook, tweets,
                  anyway you want to get the word out.  If anyone uses one of these links.  You get to Mine Gold
            </div>
        </div>

          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
    </div>
    </div>
</div>
</div>
@endsection