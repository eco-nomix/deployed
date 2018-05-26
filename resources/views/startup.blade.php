@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="pagecontainer"><img src="{{URL::to('/')}}/images/StartUpPackage-small.jpg" ></div>

    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default display">--}}
                {{--<div class="panel-heading">KineticGold Start-Up Package</div>--}}
                {{--<div class="panel-body">--}}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<div class="form-group col-md-12   ">--}}
                            {{--Members can OPTIONALLY purchase aKineticGoldix Start-up Package.    </div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--The Start-up Package is comprised of:--}}
                            {{--<ul>--}}
                                {{--<li>KineticGoldomix Debit Card  retail  $25 (us)/ $45 (non-us) </li>--}}
                                {{--<li>500 Business Cards        retail  $20 </li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-12 ">--}}
                           {{--This is a special discount package to help our members get started.--}}
                        {{--</div>--}}


                        {{--<div class="form-group col-md-12 ">--}}
                            {{--The Member cost foKineticGold-nomix Start-up Package is $35.00 ($55.00 for Members outside of the US).<br>--}}
                            {{--This is a savings of $10 from the normal retail price.--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-12 ">--}}
                            {{--Normal Annual renewal fees for the Debit Card are (US) $20.00  and (non-US) $40.00.--}}

                        {{--</div>--}}

                         {{--<div class="form-group col-md-12 ">--}}
                            {{--Cost for this KineticGoldco-Nomix product may be paid for through accrued Referral Bonuses.--}}
                         {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
</div>
@endsection