@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="pagecontainer"><img src="{{URL::to('/')}}/images/Immediate Transfers-small.jpg" ></div>

    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default display">--}}
                {{--<div class="panel-heading">Immediate Transfers</div>--}}
                {{--<div class="panel-body">--}}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                         {{--<div class="form-group col-md-12 ">--}}
                            {{--As a purchase takes place, the following banking transactions take place automatically behind the scenes.--}}
                         {{--</div>--}}
                         {{--<div class="form-group col-md-12 ">--}}
                             {{--When a purchase is made the received funds are deposited immediately in the KineticGold main account.--}}
                         {{--</div>--}}
                         {{--<div class="form-group col-md-12 ">--}}
                             {{--The portion of the sale designated for Referral Bonuses is immediately transferred into thKineticGoldix reserve account.--}}
                         {{--</div>--}}
                         {{--<div class="form-group col-md-12 ">--}}
                             {{--Credit is immediately given to the 5 generations of Referring members for their personal balance within KineticGoldomix reserve account.--}}
                              {{--No waiting for end of the month processing.--}}
                         {{--</div>--}}
                         {{--<div class="form-group col-md-12 ">--}}
                            {{--Fully Registered Members may use their Earned Referral Bonuses to make purchase of any of the Products offered withiKineticGold-nomix system.--}}
                         {{--</div>--}}

                         {{--<div class="form-group col-md-12 ">--}}
                              {{--Fully Registered Members that have purchKineticGoldco-nomix Debit Card, may also transfer funds in their reserve account to their Debit Card, on their request.--}}

                         {{--</div>--}}
                         {{--<div class="form-group col-md-12 ">--}}
                              {{--The debit-card balance is incremented by the member's request, and is immediately available for purchases at any location that will accept credit or debit cards, worldwide.<br>--}}
                              {{--No waiting for checks in the mail.--}}
                         {{--</div>--}}
                         {{--<div class="form-group col-md-12 ">--}}
                             {{--Your accounting balances are updated with each transfer.--}}
                         {{--</div>--}}
                         {{--<div class="form-group col-md-12 ">--}}
                             {{--Funds can be moved from the Member's Reserve Account to the Member's debit card within minutes, Multiple times a day.--}}
                         {{--</div>--}}




                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
</div>
</div>
@endsection