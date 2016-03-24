@extends('layouts.default')




@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Limitations on Recruiting</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            There are no limits to the number of clients you can personally sponsor.
                        </div>
                        <div class="form-group col-md-12 ">
                            Your personal organization depth is limited to 5 generations.
                        </div>
                        <div class="form-group col-md-12 ">
                            There are no limitations to your total number of people in your organization.
                         </div>
                        <div class="form-group col-md-12 ">
                            Since there are no on-going costs to be a member, there is no reason for anyone in your down-line to quit, so your organization just keeps growing over time.
                        </div>
                        <div class="form-group col-md-12 ">
                            Over time, your organization's total membership could become in the thousands of members.  Now how fast that occurs is determined by:
                        </div>
                        <div class="form-group col-md-12 ">
                            <ul>
                                <li>How well you understand the opportunity of Eco-nomix. Read and understand the contents of the web-site.</li>
                                <li>How consistent you are in spreading the word. Keep your business cards with you.</li>
                                <li>How many business cards and referral links you hand out.</li>
                                <li>If you encourage your downline to do the same.</li>
                            </ul>
                        </div>
                         <div class="form-group col-md-12 ">
                             Obviously, your organizations size alone will not create any income for you.  All bonuses are paid from sales that are made,  so encourage your down-line to know what products are available, and to discover how they can be utilized to become more independent and self-suffient.
                          </div>
                         <div class="form-group col-md-12 ">
                             Remember that a great many people are highly motivated to become self-sufficient and independent.  As these perilous times further unfold, more and more people will want to become such.
                         </div>

                         <div class="form-group col-md-12 ">
                          </div>
                         <div class="form-group col-md-12 ">

                         </div>


                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection