@extends('...layouts.default')




@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="pagecontainer"><img src="{{URL::to('/')}}/images/Donations-small.jpg" ></div>

    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default display">--}}
                {{--<div class="panel-heading">Donations</div>--}}
                {{--<div class="panel-body">--}}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--1% of every sale will be given to charitable organizations.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                            {{--The member's get to decide where that money goes.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--Each Member designates their charity of choice.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--If a purchase is made by any of the member's direct referrals, the 1% of that sale goes to the designated charity.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--An additional 3% of sales will be directed for worth while organizations and efforts.--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--It should be great satisfaction to know that such a high percentage is being given back to those who are in need, and worth while causes.--}}
                        {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
</div>
</div>
@endsection