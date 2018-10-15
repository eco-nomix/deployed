@extends('layouts.tib')




@section('content')
<div style="position:absolute; top:52px; z-index:-1;  right:0; left:auto; width:100%">
    <div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
           <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover;

            <div class="skip">&nbsp;</div>
            <div class="trans row">
            <div class="col-md-8 col-md-offset-2">
                <div style="width:100%;">
                    <div class="kinetic600">
                        Auto-Ship Policy
                    </div>
                </div>
                <div style="width:100%;" class="panel panel-default display">
                    <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            The TIB Foundation does not sell physical products that have an Auto-Ship Option.
                             As a result there is no need for an Auto-Shop Policy.
                        </div>


                        <div class="form-group col-md-12 ">
                            Memberships renew automatically and will be billed on the same day of the month on which it originated.

                        </div>
                         <div class="form-group col-md-12 ">
                            Memberships cancelled within 1 week past the automatic renewal date will be fully reimbursed.  Memberships after that period will be pro-rated.
                         </div>
                         <div class="form-group col-md-12 ">
                            There are no refunds for previous months already billed with the exception of the above policy.
                          </div>
                         <div class="form-group col-md-12 ">

                         </div>


                         <div class="form-group col-md-12 ">
                          </div>
                         <div class="form-group col-md-12 ">

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