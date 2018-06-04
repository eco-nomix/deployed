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
                        Payment
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Payment </div>
                <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="/payment">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                             <label class="col-md-4 control-label">Charge Amount</label>
                             <div class="col-md-6">
                                  <input readonly type="text" class="form-control" value="$35.00">
                             </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Name on Card</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="billing_name" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Credit Card Number </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="credit_card" value="">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label">Expiration Date</label>
                            <div class="col-md-6">
                                Month: <select name="month">
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select>

                                Year: <select name="year">
                                    <option value="16">2016</option>
                                    <option value="17">2017</option>
                                    <option value="18">2018</option>
                                    <option value="19">2019</option>
                                    <option value="20">2020</option>
                                    <option value="21">2021</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Security Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="security_code">
                            </div>
                        </div>

                        <div class="form-group">
                             <label class="col-md-4 control-label">E-Check</label>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Name on Check</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="check_name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Bank Routing Number </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="routing_number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Bank Account Number </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="account_number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Pay Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection