@extends('layouts.default')

@section('content')
<div class="container-fluid" style="position:absolute; top:52px; z-index:-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
					<div class="panel-heading">Pay to Distributor</div>
                   <div class="panel-body">
                        
						@if ($act == 'paytodistributor')
							
							<?php 
								echo 'current time :'  . date('Y-m-d H:i:s');
								echo '<br />current timezone: ' . date_default_timezone_get();
								echo "<br /><br /><pre>";print_r(htmlentities($envelope));echo "</pre>";
								print_r($response);
							?>
							
						@else
							<form class="form-horizontal" role="form" method="POST" action="">
								<input type="hidden" name="_token" value="{{ csrf_token() }}" />
								 <input type="hidden" name="act" value="paytodistributor" />
								<div class="form-group">
									<label class="col-md-4 control-label">Amount</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" placeholder="ie. 100" name="amount" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Recieving Account Number</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" placeholder="ie. 32303991" name="to_account" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Invoice Number</label>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="ie. 123456" name="invoice_number" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Comment</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="commetn" >
									</div>
								</div>
								
								
								
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										 <button type="submit" class="btn btn-primary">
											  Send Payment
										 </button>
									</div>
								</div>
						   </form>
					   @endif
					   
							<br /><br />
							<a href="{{URL::to('/')}}/distributor">Go Distributor Page </a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection