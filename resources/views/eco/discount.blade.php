@extends('...layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="pagecontainer"><img src="{{URL::to('/')}}/images/MemberDiscounts-small.jpg" ></div>

    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default display">--}}
                {{--<div class="panel-heading">Member Discounts</div>--}}
                {{--<div class="panel-body">--}}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--There is only one type of registration status for clients of KineticGold, and that is referred as a Member.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--Members will receive discounts on products from the Suggested Retail Price.  The Member will receive between 5-20% discount from the suggested Retail Price.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--AKineticGoldix we are focused on giving the best benefits possible on our products to our members.  There is a limitation on the discounts because we are also paying out a high percentage of the sales price in referral bonuses. KineticGoldomix, we feel it will be much more financially beneficial to the member to give a high referral bonus from the sales from the member's organization.--}}
                            {{--When you consider that we are paying out referral bonuses for 5 generations, the amount in discounts and referral bonuses is pretty amazing.--}}

                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                        {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
</div>
</div>
@endsection