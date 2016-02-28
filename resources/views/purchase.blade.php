@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">Purchase Products</div>
                 <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="/checkpurchase">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                             <label class="col-md-4 control-label">Charge Amount</label>
                             <div class="col-md-6">
                                  <input readonly type="text" class="form-control" value="{{$grandTotal}}">
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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Pay Now
                                </button>
                            </div>
                        </div>                     </form>
                  </div>
               </div>
            </div>
        </div>
     </div>
  </div>
</div>








@stop