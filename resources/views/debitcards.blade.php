@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="pagecontainer"><img src="{{URL::to('/')}}/images/Debit Cards-small.jpg"></div>

    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default display">--}}
                {{--<div class="panel-heading">Eco-nomix Debit Cards</div>--}}
                {{--<div class="panel-body">--}}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--Members can OPTIONALLY purchase an Eco-nomix Debit Card.  This card is good at any location which accepts credit and/or debit cards including ATM's.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--Referral Bonuses are initially placed within Eco-nomix's Reserve account and are held there until--}}
                            {{--<ul>--}}
                                {{--<li> they are requested to be transferred to member's debit card by the member.</li>--}}
                                {{--<li> they are used for a Member's purchase. </li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-12 ">--}}
                           {{--This allows the member to control when they receive taxable income.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--The debit cards are only good for the amount transferred to them, there is no credit against future bonuses.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--Transfers to the debit card will be available immediately after the transfer request, initiated by the Member on the Eco-nomix website.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--The initial Debit cards will be a standard issue Pay Roll Card issued by our bank.  It will have the Eco-nomix branding on it.--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-12 ">--}}
                            {{--The Member cost for the Debit card is $25.00 ($45.00 for Members outside of the US).<br>--}}
                            {{--Annual renewal fees are (US) $20.00  and (non-US) $40.00.--}}
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