@extends('layouts.tib')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="height:100%;">
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover;
                                                                                          background-attachment:fixed;  background-image:url('/images/pexels-photo-97079.jpeg');">

   <div class="skip">&nbsp;</div>

     <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                            <div class="kinetic400">
                                  Purpose
                            </div>
                        </div>
            <div class="panel panel-default tibdisplay">

                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        Many people are now finding themselves in a difficult situation concerning
                        their homes.  There homes are being threatened by collection agencies, brokers
                        and banks.  The uncertainty of foreclosure and the significant impact on family lives
                        is reaching millions of people every year.
                    </div>
                    <div class="form-group col-md-12 ">
                        TIB Foundation would like to educate you on how to fight and win this battle in the
                        courtroom.  There are many time proven approaches that will allow you to continue to live in
                        your home even in a default mode.  You need to know these steps now if you are to prevent
                        your eviction and even theft of your home by agencies who are only after money.
                    </div>
                    
                    <div class="form-group col-md-12 ">
                        TIB Foundation will be filming dozens of instructional videos every month that will guide you on your next steps
                        and how to keep your home.  This information can be used by attorneys to win the law suits that
                        the Banks never thought they would lose.
                    </div>
                    <div class="form-group col-md-12 ">
                        You will learn what and how you should respond to the attorneys and even the courts.  This information will save you
                        thousands by avoiding legal tactics that just aren't affective.  Knowing what to ask your attorney to do is a critical step
                        in beating the banks at their own games.
                    </div>
                    <div class="form-group col-md-12 ">
                        This educational training is available for a low fee of $50 per month.
                    </div>
                    <div class="form-group col-md-12 ">
                        The time to act is now as the clock is likely already ticking.
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
</div>
</div>
</div>
@endsection