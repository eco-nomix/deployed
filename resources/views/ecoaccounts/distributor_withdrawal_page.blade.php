@extends('............Downloads.CODE-06-02-2018.resources.views.layouts.default')
@push('custom-css')
	<style type="text/css">
		.no-border td{
			border: none !important;
		}
	</style>
@endpush
@section('content')
<div style="position:absolute; top:80px; z-index:-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Referral Withdrawal</h3>
					</div>
                  	<div class="panel-body">
                  		<div class="row">
                  			<div class="col-md-12">
                  				<table class="table table-striped">
									<thead>
										<tr>
											<th>Amount</th>
											<th>Withdrawal Via</th>
											<th>Date</th>
										</tr>
									</thead>

									<tbody>	
										@if( count($r_w) > 0 )
											@foreach($r_w as $r )
												<tr>
													<td>
														{{ $r->amount }}
													</td>
													<td>
														{{ ucwords(str_ireplace('_',' ',$r->request_type)) }}
													</td>
													<td>
														{{ $r->created_at->format('d-m-Y') }}
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td>
													<h3>
														You didn't withdrawal anything yet
													</h3>
												</td>
											</tr>
										@endif
									</tbody>
								</table>	
                  			</div>

                  			<div class="col-md-12" style="margin-top: 50px;">
                  				<table class="table no-border">
                  					<tbody>
                  						<tr>
                  							<td>
	                  							<strong>
	                  								Total Commission Earned : ${{ $t_r }}
	                  							</strong>
	                  						</td>
                  						</tr>
                  						<tr>
                  							<td>
	                  							<strong>
	                  								Total Withdrawal : ${{ $t_r_w }}
	                  							</strong>
	                  						</td>
                  						</tr>
                  						<tr>
                  							<td>
	                  							<strong>
	                  								Remaining Balance : ${{ round($t_r - $t_r_w,2) }}
	                  							</strong>
	                  						</td>
                  						</tr>
                  					</tbody>
                  				</table>

                  				<form method="post" id="referral_withdrawal" action="{{ route('distributor.withdrawal') }}">
                  					{{ csrf_field() }}
              						<h4>Please select Payment type</h4>
              						<input type="hidden" name="type" value="referral">
              						<input type="hidden" name="userid" value="{{ $user_id }}">
              						<span>
              							Debit Card <input type="radio" name="payment_type" class="form-control" value="debit_card" {{ $dCard ? 'checked=checked' : '' }} style="width: 100px;">
              						</span>

              						<span>
              							Amount <input type="text" name="amount" class="form-control" value="" style="width: 100px;">
              						</span>

              						<button type="submit" class="btn btn-primary" style="margin-top: 20px;">
              							Request Withdrawal
              						</button>
                  				</form>
                  			</div>
                  		</div>
	                  		
                  	</div>
                </div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Profit Withdrawal</h3>
					</div>
                  	<div class="panel-body">
                  		<div class="row">
                  			<div class="col-md-12">
                  				<table class="table table-striped">
									<thead>
										<tr>
											<th>Amount</th>
											<th>Withdrawal Via</th>
											<th>Date</th>
										</tr>
									</thead>

									<tbody>	
										@if( count($c_w) > 0 )
											@foreach($c_w as $h )
												<tr>
													<td>
														{{ $h->amount }}
													</td>
													<td>
														{{ ucwords(str_ireplace('_',' ',$h->request_type)) }}
													</td>
													<td>
														{{ $h->created_at->format('d-m-Y') }}
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td>
													<h3>
														You didn't withdrawal anything yet
													</h3>
												</td>
											</tr>
										@endif
									</tbody>
								</table>		
                  			</div>

                  			<div class="col-md-12" style="margin-top: 50px;">
                  				<table class="table no-border">
                  					<tbody>
                  						<tr>
                  							<td>
	                  							<strong>
	                  								Total Commission Earned : ${{ $t_c }}
	                  							</strong>
	                  						</td>
                  						</tr>
                  						<tr>
                  							<td>
	                  							<strong>
	                  								Total Withdrawal : ${{ $t_c_w }}
	                  							</strong>
	                  						</td>
                  						</tr>
                  						<tr>
                  							<td>
	                  							<strong>
	                  								Remaining Balance : ${{ round($t_c - $t_c_w,2) }}
	                  							</strong>
	                  						</td>
                  						</tr>
                  					</tbody>
                  				</table>

                  				<form method="post" id="commision_withdrawal" action="{{ route('distributor.withdrawal') }}">
                  					{{ csrf_field() }}
              						<h4>Please select Payment type</h4>
              						<input type="hidden" name="type" value="commission">
              						<input type="hidden" name="userid" value="{{ $user_id }}">
              						<span>
              							Debit Card <input type="radio" name="payment_type" class="form-control" value="debit_card" {{ $dCard ? 'checked=checked' : '' }} style="width: 100px;">
              						</span>
              						<span>
              							Check <input type="radio" name="payment_type" class="form-control" value="check" {{ $dCard ? '' : 'checked=checked' }} style="width: 100px;">
              						</span>

              						<span>
              							Amount <input type="text" name="amount" class="form-control" value="" style="width: 100px;">
              						</span>

              						<button type="submit" class="btn btn-primary" style="margin-top: 20px;">
              							Request Withdrawal
              						</button>
                  				</form>
                  			</div>
                  		</div>
                  	</div>
                </div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('custom')
	<script type="text/javascript">
		$(document).on('submit','#commision_withdrawal',function(e){
			if( $(this).find('input[name="payment_type"]:checked').val() == 'debit_card' ){
				@if( !$dCard )
					e.preventDefault();
					alert('Please add debit card');
					return false;
				@endif
			}

			if( !$(this).find('input[name="amount"]').val() ){
				e.preventDefault();
				alert('Please enter amount to withdrawal');
				return false;
			}
			else if( $(this).find('input[name="amount"]').val() > {{ $t_c - $t_c_w }} ){
				e.preventDefault();
				alert('Please enter amount less than {{ $t_c - $t_c_w }}');
				return false;
			}
		});

		$(document).on('submit','#referral_withdrawal',function(e){
			if( $(this).find('input[name="payment_type"]').is(':checked') === false ){
				e.preventDefault();
				alert('Please select payment type');
				return false;
			}
			else if( $(this).find('input[name="payment_type"]:checked').val() == 'debit_card' ){
				@if( !$dCard )
					e.preventDefault();
					alert('Please add debit card');
					return false;
				@endif
			}

			if( !$(this).find('input[name="amount"]').val() ){
				e.preventDefault();
				alert('Please enter amount to withdrawal');
				return false;
			}
			else if( $(this).find('input[name="amount"]').val() > {{ $t_r - $t_r_w }} ){
				e.preventDefault();
				alert('Please enter amount less than {{ $t_r - $t_r_w }}');
				return false;
			}
		});
	</script>
@endpush