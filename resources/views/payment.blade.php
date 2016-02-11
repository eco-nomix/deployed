@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
                                <input type="text" class="form-control" name="Ex Date">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection