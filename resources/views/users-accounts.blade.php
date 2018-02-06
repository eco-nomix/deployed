@extends('layouts.default')

@section('content')

<div style="position:absolute; top:80px; z-index:-1">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<div class="panel panel-default">

					<div class="panel-heading">

						Referal Commission

					</div>

                  	<div class="panel-body">

                  		<table class="table table-striped">

							<thead>

								<tr>

									<th>Product Name</th>

									<th>Referal Amount</th>

									<th>Product Amount</th>

									<th>Date</th>

								</tr>

							</thead>



							<tbody>

								@if( count($referal_commission) > 0 )

									@foreach( $referal_commission as $r_c )



										<tr>

											<td>

												{{ $r_c->product_name }}

											</td>

											<td>

												{{ $r_c->amount }}

											</td>

											<td>

												{{ $r_c->product_amt }}

											</td>

											<td>

												{{ $r_c->date }}

											</td>

										</tr>



									@endforeach



									<tr>

										<td style="border: 0 !important;"></td>

										<td style="border: 0 !important;"></td>

										<td style="border: 0 !important;"></td>

										<td style="border: 0 !important;"></td>

									</tr>

									<tr>

										<td style="border: 0 !important;"></td>

										<td style="border: 0 !important;"></td>

										<td style="border: 0 !important;"></td>

										<td style="border: 0 !important;"></td>

									</tr>

									<tr>

										<td>Total :-</td>

										<td>{{ '$'. $total_r_c }}</td>

										<td>
											@if( $total_r_c )

												<form action="{{ route('distributor.withdrawal') }}" method="post" id="r_c_form">

													<div class="col-md-6">
														{{ csrf_field() }}
														<input type="hidden" name="type" value="referral">
              											<input type="hidden" name="userid" value="{{ $user_id }}">
														<input type="text" class="form-control" name="amount" id="requested_amount_r_c" data-rc="{{ $total_r_c }}">

														<button type="submit" value="user_account_withdraw" name="submit" class="btn btn-info">Request</button>

													</div>		

												</form>

											@endif
										</td>

										<td>

											

										</td>

									</tr>



								@else

									<tr>

										<td>

											<h3>You didn't get any commission yet</h3>

										</td>

									</tr>

								@endif

							</tbody>

						</table>

                  	</div>

                </div>

			</div>

		</div>

	</div>

</div>



@endsection



@push('custom')
	@if( $total_r_c > 0 )
		<script type="text/javascript">
			$(document).on('submit','#r_c_form',function(e){

				var amt = $('#requested_amount_r_c').val();
				if( amt ){
					if( $.isNumeric(amt) && (amt > 0) ){
						if( amt > $('#requested_amount_r_c').data('rc') ){
							e.preventDefault();
							alert('Invalid amount');
							return false;
						}
					}
					else{
						e.preventDefault();
						alert('Invalid Amount');
						return false;
					}
				}
				else{
					e.preventDefault();
					alert('Invalid Amount');
					return false;
				}

				@if( !$is_user_have_debit_card )
					e.preventDefault();
					alert('Debit Card Required to withdraw');
					return false;
				@endif
			});
		</script>
	@endif
@endpush