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
                        Auto-Ship Policy
                    </div>
                </div>
                <div class="panel panel-default display">
                    <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            Kinetic Gold does not sell products that have an Auto-Ship Option.
                        </div>
                        <div class="form-group col-md-12 ">
                            Your personal organization depth is limited to 5 generations.
                        </div>
                        <div class="form-group col-md-12 ">
                            There are no limitations to the total number of people in your organization.
                         </div>
                        <div class="form-group col-md-12 ">
                            Since there are no on-going costs required to be a member, there is no reason for anyone in your down-line to quit, so your organization just keeps growing over time.
                        </div>
                        <div class="form-group col-md-12 ">
                            Over time, your organization's total membership could grow to thousands of members.  Now how fast that occurs is determined by:
                        </div>
                        <div class="form-group col-md-12 ">
                            <ul>
                                <li>How well you understand the opportunity of KineticGold. <br>Read and understand the contents of KineticGold's web-site.</li>
                                <li>How consistent you are in spreading the word. <br>Keep your business cards with you.</li>
                                <li>How many business cards and referral links you hand out.</li>
                                <li>Encourage your down-line Members to do the same.</li>
                            </ul>
                        </div>
                        <div class="form-group col-md-12 ">
                            Become creative in how you get the word out,  your referral link is key to your success.
                        </div>
                         <div class="form-group col-md-12 ">
                            Put your referral link in your email, ads, or notices.
                         </div>
                         <div class="form-group col-md-12 ">
                             Obviously, your organizations size alone will not create any income for you.  All Profit Sharing is earned
                             from deposits that are made,  so encourage your down-line to know what works to spread the word, and to discover
                             how they can be utilized.
                          </div>
                         <div class="form-group col-md-12 ">
                             Remember that a great many people are highly motivated to become self-sufficient.  As these perilous times further unfold, more and more people will want to become such.
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
            </div>
        </div>
    </div>
</div>
@endsection