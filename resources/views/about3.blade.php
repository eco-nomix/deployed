@extends('layouts.tib')



@section('content')
<div style="position:absolute; top:52px; z-index:-1;  right:0; left:auto; width:100%">
    <div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
        <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover;
                  background-attachment:fixed;  background-image:url('/images/pexels-photo-97079.jpeg');">
            <div class="skip">&nbsp;</div>
            <div class="trans row">
                <div class="col-md-8 col-md-offset-2">
                    <div style="width:100%;">
                       <div class="kinetic600">
                           About TIB Foundation
                       </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default display">
                            <div class="panel-body">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group col-md-12 ">
                                   The TIB Foundation's purpose is to provide it's members with information about finance, money and investments.
                                </div>
                                <div class="form-group col-md-12 ">
                                    It accomplishes this by providing a monthly newsletter that analyzes  various investments, banking programs and opportunities that can impact your financial future.  Also the latest videos on financial training are reviewed.
                                </div>
                                <div class="form-group col-md-12 ">
                                    It also provides video training on various methods to minimize mortgage costs and fees.  Special emphasis is given to assist the homeowner on methods to eliminate foreclosure attempts.
                                </div>
                                 <div class="form-group col-md-12 ">
                                    It also provides special promotions and benefits to its members that are only open to its members.
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection