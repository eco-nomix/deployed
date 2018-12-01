@extends('...layouts.golddiggers')


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
                               Privacy Policy
                           </div>
                       </div>

            <div class="panel panel-default display">

                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="form-group col-md-12 ">
                            This is an extration of Section 7.0 from the General Policies and Procedures manual.
                         </div>
                         <div class="form-group col-md-12 ">
                            7.0 PRIVACY POLICY
                            </div>
                            <div class="form-group col-md-12 ">
                            7.1 Introduction
                            </div>
                             <div class="form-group col-md-12 ">
                            <p style="KineticGoldft: 20px">This Privacy Policy is to ensure that all Customers and Members understand and adhere to The Gold Diggers Association principles of confidetiality</p>
                            </div>
                            <div class="form-group col-md-12 ">
                            7.2 Expectation of Privacy
                            </div>
                            <div class="form-group col-md-12 ">
                                <ol type="A">
                                    <li>The Gold Diggers Association recognizes and respects the importance its Customers and Members place on the privacy of their financial and personal information.
                                    The Gold Diggers Association will make reasonable efforts to safeguard the privacy of, and maintain the confidentiality of its Customers’ Member and account information
                                    and nonpublic personal information.</li>
                                    <li>By the The Gold Diggers Association Member Agreement, a Member authorizes The Gold Diggers Association to disclose his or her name and contact information to upline Members solely
                                    for activities related to the furtherance of the The Gold Diggers Association business. A Member hereby agrees to maintain the confidentiality and
                                    security of such information and to use it solely for the purpose of supporting and The Gold Diggers Association his or her downline organization and conducting
                                    the The Gold Diggers Association business.</li>
                                    <li>The Gold Diggers Association will not disclose any personal information to outside third parties unless required by law.</li>
                                </ol>
                            </div>
                            <div class="form-group col-md-12 ">
                                7.3 Employee Access to Information
                            </div>
                             <div class="form-group col-md-12 ">
                                Employee may have access to only that information necessary to do their specific job.  For example, a shipping clerk would have shipping information, but not have access to account
                                balances.
                             </div>
                             <div class="form-group col-md-12 ">
                                   7.4 3rd Party Access to Information
                             </div>
                             <div class="form-group col-md-12 ">
                                   There will be no 3rd party access to Member information, contact information, purchases, balances, etc. unless that disclosure request is accompanied with a court order.
                             </div>

                </div>
            </div>
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
        </div>
    </div>
</div>
</div>
@endsection