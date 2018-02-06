@extends('............Downloads.CODE-06-02-2018.resources.views.layouts.default')
@section('content')
<div style="position:absolute; top:80px; z-index:-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Distributor Commission</h3>
					</div>
                  	<div class="panel-body">
                  		<div class="row">
                  			<div class="col-md-12">
                  				<select id="select_distributor_for_com" class="pull-right">
                  					<option value="">-Select Distributor-</option>
                  					@foreach( $distributor_list as $d_l )
                  						<option value="{{ $d_l['id'] }}" {{ (request()->get('type') == 'distributor' && request()->get('id') == $d_l['id']) ? 'selected=selected' : '' }}>{{ $d_l['name'] }}</option>
                  					@endforeach
                  				</select>
                  			</div>
                  			<div class="col-md-12">
                  				<table class="table table-striped">
									<thead>
										<tr>
											<th>User Name</th>
											<th>Product Name</th>
											<th>Commission Amount</th>
											<th>Product Amount</th>
											<th>Date</th>
										</tr>
									</thead>

									<tbody>	
										@if( count($distributor_commission) > 0 )
											@foreach($distributor_commission as $d_c )
												<tr>
													<td>
														{{ $d_c->owner }}
													</td>
													<td>
														{{ $d_c->product_name }}	
													</td>
													<td>
														{{ '$'.$d_c->amount }}
													</td>
													<td>
														{{ '$'.$d_c->transactionDetails->amount }}
													</td>
													<td>
														{{ $d_c->date }}
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
												<td>{{ '$'. $total_d_c }}</td>
												<td></td>
												<td></td>
											</tr>
										@else
											<tr>
												<td>
													No Commission
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

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Referal Commission</h3>
					</div>
                  	<div class="panel-body">
                  		<div class="row">
                  			<div class="col-md-12">
                  				<select id="select_user_for_com" class="pull-right">
                  					<option value="">-Select User-</option>
                  					@foreach( $user_list as $d_l )
                  						<option value="{{ $d_l['id'] }}" {{ (request()->get('type') == 'user' && request()->get('id') == $d_l['id']) ? 'selected=selected' : '' }}>{{ $d_l['name'] }}</option>
                  					@endforeach
                  				</select>
                  			</div>
                  			<div class="col-md-12">
                  				<table class="table table-striped">
									<thead>
										<tr>
											<th>Owner</th>
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
														{{ $r_c->owner }}
													</td>
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
												<td></td>
												<td></td>
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
	</div>
</div>

@endsection

@push('custom')

	<script type="text/javascript">
		$(document).on('change','#select_user_for_com',function(e){
			if( $(this).val() != '' ){
				location.href = '{{ route("admin.accounts.history") }}'+'?type=user&id='+$(this).val(); 
			}
		});

		$(document).on('change','#select_distributor_for_com',function(e){
			if( $(this).val() != '' ){
				location.href = '{{ route("admin.accounts.history") }}'+'?type=distributor&id='+$(this).val(); 
			}
		});
	</script>

@endpush