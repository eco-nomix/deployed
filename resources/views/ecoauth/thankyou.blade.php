@extends('...layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1; right:0; left:auto; width:100%">
    <div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
        <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
            <div class="skip">&nbsp;</div>
            <div class="trans row">
            <div class="col-md-8 col-md-offset-2">
                <div style="width:100%;">
                    <div class="kinetic600">
                       Thank You
                    </div>
                </div>
            <div class="panel panel-default">

                <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="/payment">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                             <label class="col-md-10 control-label">A Charge of ${{$charge}} was approved for card {{$cardnumber}}.  You are now a Member of The Gold Diggers Association for KineticGold.</label>

                        </div>
                        <div class="form-group">
                             <label class="col-md-10  text-center">You are now Logged in for this session</label>

                        </div>





                    </form>
                </div>
            </div>
             </div> <div class="skip">&nbsp;</div>
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
                                                 <div class="skip">&nbsp;</div>
                                                  <div class="skip">&nbsp;</div>
        </div>
    </div>

    </div>
</div>
</div>
@endsection