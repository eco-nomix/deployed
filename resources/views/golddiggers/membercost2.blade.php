@extends('...layouts.golddiggers')


@section('content')
<div style="width:100%; position:absolute; top:52px; z-index:-1; right:0; left:auto; width:100%;">
<div style="width:100%;">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/MemberCosts-small.jpg" ></div>--}}
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
   <div class="skip">&nbsp;</div>

    <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                            <div class="kinetic800">
                                  Member Costs for Gold Diggers Association
                            </div>
                        </div>


            <div class="panel panel-default display">

                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group col-md-12 ">
                            Gold Diggers is an association that is focused on making our members aware of opportunities in investments, banking and financing.  It will do this in the form
                            of a monthly newletter that is sent to all of it's members detailing information about various opportunities, their risks and potential rewards along with a
                            a detailed 'how-to' method to get involved if you are interested.
                        </div>
                        <div class="form-group col-md-12 ">
                            There are no requirements for members of the Gold Digger's association to participate within any program.  This information is provided as 'information' only and is not
                            to be construed as investment advise.  All member's need to do their own due dilligence to determine if any particular opportunity fit's with your investment goals and/or
                            styles, limits and desires.
                        </div>
                        <div class="form-group col-md-12 ">
                            To become a member of the association there is a one-time registration fee of $39.95.    </div>
                        <div class="form-group col-md-12 ">
                              There are no annual, monthly costs for the Gold Digger's Association, or required products to purchase</div>
                        <div class="form-group col-md-12 ">Registration is a simple process just
                            <ul>
                                <li>Provide your basic information (name, email, desired username and password, verify your email,update and contact information)</li>
                                <li>Submit your registration Fee</li>
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