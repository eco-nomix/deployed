@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="pagecontainer"><img src="{{URL::to('/')}}/images/BusinessCards-small.jpg" ></div>

    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default display">--}}
                {{--<div class="panel-heading">Business Cards</div>--}}
                {{--<div class="panel-body">--}}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--Member's may OPTIONALLY purchase Eco-nomics Business Cards.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                          {{--Each card will be printed with the Name and Address of the member, plus their Eco-nomix referral link.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                          {{--The card will be a full color professional card, that will invite potential customers to visit Eco-nomix's web site.--}}

                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                          {{--When the Referral link is used, the referring member will be recorded in all transactions and future transactions performed by the referred member.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--<img src="{{URL::to('/')}}/images/business_card.png">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--Your business card will be extremely helpful in helping you build your organization.  By simply handing out your card to interested individuals, when they log in using the Referral Link on the card, you will automatically be given the sponsorship credit for the new registration and/or member.  This allows you to individually sponsor many individuals creating a very wide organization.--}}
                            {{--Once the new member follows your example by handing out their cards, you will find your organization will also grow deep quickly, resulting in a very large downline organization, which can lead to significant bonuses.--}}
                        {{--</div>--}}

                       {{--<div class="form-group col-md-12 ">--}}
                            {{--Business Cards may be purchased for $20.00 for 500 business cards.--}}
                       {{--</div>--}}

                        {{--<div class="form-group col-md-12 ">--}}
                            {{--Cost for this and any Eco-Nomix product may be paid for through accrued Referral Bonuses.--}}
                        {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
</div>
</div>
@endsection