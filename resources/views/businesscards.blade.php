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
                                                Business Cards
                        </div>
                    </div>
            <div class="panel panel-default display">
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                           Member's may OPTIONALLY purchase KineticGold Business Cards.
                        </div>
                        <div class="form-group col-md-12 ">
                          Each card will be printed with the Name and Address of the member, plus their KineticGold referral link.
                        </div>
                        <div class="form-group col-md-12 ">
                          The card will be a full color professional card, that will invite potential customers to visit KineticGold's web site
                          using the member's Referral Link.

                        </div>
                        <div class="form-group col-md-12 ">
                          When the Referral link is used, the referring member will be recorded in all transactions and future transactions
                          performed by the referred member.
                        </div>
                        <div class="form-group col-md-12 " style="opacity:1.0">
                            <img src="kineticGold-BusinessCard.jpeg" width="900px">
                        </div>
                        <div class="form-group col-md-12 ">
                            Your business card will be extremely helpful in helping you build your organization.
                            By simply handing out your card to interested individuals, when they log in using the
                            Referral Link on the card, you will automatically be given the sponsorship credit for the new registration
                            and/or member.  This allows you to individually sponsor many individuals creating a very wide organization.
                            Once the new member follows your example by handing out their cards, you will find your organization
                            will also grow deep quickly, resulting in a very large downline organization, which can lead to significant Profit Sharing.
                        </div>

                       <div class="form-group col-md-12 ">
                            Business Cards may be purchased for $25.00 for 500 business cards, including shipping.
                       </div>

                        <div class="form-group col-md-12 ">
                            Cost for this may be paid for through accrued Profit Sharing.
                        </div>
                        <div class="form-group col-md-12 ">
                            If you wish to have your own business cards printed locally using the KineticGold graphics, you may download the image here.
                            <p>
                            <a href="/downImg/kineticGold-BusinessCard.jpeg">
                            <button>Download</button>
                            </a>
                            </p>
                            <p>
                            Suggestion, a lowcost solution is the use the images with VistaPrint.com or Gotprint.com.  They have packages that start from $10.00 including shipping.

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
          <div class="skip">&nbsp;</div>
         </div>
</div>
</div>
@endsection