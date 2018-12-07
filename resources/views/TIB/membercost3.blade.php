@extends('...layouts.tib')


@section('content')
<div style="width:100%; position:absolute; top:52px; z-index:-1; right:0; left:auto; width:100%;">
<div style="width:100%;">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/MemberCosts-small.jpg" ></div>--}}
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover;
 background-attachment:fixed;  background-image:url('/images/pexels-photo-97079.jpeg');">
   <div class="skip">&nbsp;</div>

    <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                            <div class="kinetic800">
                                  Member Costs for TIB Foundation
                            </div>
                        </div>


            <div class="panel panel-default tibdisplay">

                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group col-md-12 ">
                            TIB Foundation is an association that is focused on helping our members
                            navigate the foreclosure process and to turn the tide legally in the courtroom on the
                            immoral actions of lenders and banks.
                        </div>
                        <div class="form-group col-md-12 ">
                            There are no requirements for members of the TIB Foundation Members to participate within any program.  This information is provided as 'information' only and is not
                            to be construed as investment advise.  All member's need to do their own due dilligence to determine if any particular opportunity fit's with your investment goals and/or
                            styles, limits and desires.
                        </div>
                        <div class="form-group col-md-12 ">
                            The Membership program is on a subscription basis.  The cost is $50.00 per month.
                            The membership fee will be auto-processed on a monthly basis on the same day of the month.
                        </div>
                        <div class="form-group col-md-12 ">Subscription is a simple process just
                            <ul>
                                <li>Provide your basic information (name, email, desired username and password, payment and contact information)</li>
                                <li>Your Subscription fee will be processed automatically each month.</li>
                            </ul>
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
</div>
</div>
</div>
@endsection