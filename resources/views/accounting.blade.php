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
                               Organization Accounting System
                           </div>
                       </div>
            <div class="panel panel-default display">

                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="form-group col-md-12 ">
                            When Members login they have a couple special items in their personal pull down menus -  Organization and Accounting.
                         </div>
                         <div class="form-group col-md-12 ">
                           The Organization Module contains a number of sections that you will find very interesting
                         </div>
                         <div class="form-group col-md-12 ">
                               1.  The ability to see who is in your complete down-line of referrals.
                               Over time this could grow to be thousands of individuals.
                               If any one of those individuals makes a deposit into their account, no matter how big or small, that will result in profit sharing to you.
                         </div>
                         <div class="form-group col-md-12 ">
                              2.  The ability to see where all of your Awards and Profit Sharing are coming from, and how much.
                         </div>

                         <div class="form-group col-md-12 ">
                              3.  The ability to contact via email those in your down-line - through the KineticGold messaging system.
                         </div>
                         <div class="form-group col-md-12 ">
                          The Accounting Module allows you to:
                         </div>
                         <div class="form-group col-md-12 ">
                              1.  The ability to check balances in your checking account, and savings account.
                         </div>
                         <div class="form-group col-md-12 ">
                             2.  A history of all deposits in your organization over time, income, and spending.
                         </div>


                </div>
            </div>
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>

        </div>
    </div>
    </div>
</div>
</div>
@endsection