@extends('............Downloads.CODE-06-02-2018.resources.views.layouts.default')

@section('content')
<div style="position:absolute; top:80px; z-index:-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				@if( session()->has('fail') )
					<script type="text/javascript">
						alert('{{ session()->get("fail") }}');
					</script>
				@endif
				@if( session()->has('success') )
					<script type="text/javascript">
						alert('{{ session()->get("success") }}');
					</script>
				@endif
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Admin Product History</h3>
					</div>
                  	<div class="panel-body">
                  		<div class="row">
                  			<div class="col-md-12">
                  				<select id="select_purchaser" class="pull-right" style="margin-left: 5px;">
                  					<option value="">Select Purchaser</option>
                  					@foreach( $purchaser as $k_p => $p )
                  						<option value="{{ $k_p }}" {{ request()->get('purchaser') == $k_p ? 'selected=selected' : '' }}>
                  							{{ $p }}
                  						</option>
                  					@endforeach
                  				</select>
                  				<select id="select_owner" class="pull-right" style="margin-left: 5px;">
                  					<option value="">Select Distributor</option>
                  					@foreach( $list_of_dist as $lof )
                  						<option value="{{ $lof->id }}" {{ request()->get('owner') == $lof->id ? 'selected=selected' : '' }}>
                  							{{ $lof->first_name .' '. $lof->last_name }}
                  						</option>
                  					@endforeach
                  				</select>
                  				<select id="select_owner_type" class="pull-right">
									<option value="">-Select Owner-</option>
									<option value="all" {{ request()->get('type') == 'all' ? 'selected=selected' : '' }}>
										All
									</option>
									<option value="distributor" {{ request()->get('type') == 'distributor' ? 'selected=selected' : '' }}>Distributor</option>
									<option value="website" {{ request()->get('type') == 'website' ? 'selected=selected' : '' }}>Website</option>
								</select>
								<select id="select_action" class="pull-right">
									<option value="">-Select Action-</option>
									<option value="0" {{ request()->get('status') == '0' ? 'selected=selected' : '' }}>Pending</option>
									<option value="1" {{ request()->get('status') == '1' ? 'selected=selected' : '' }}>Shipped</option>
									<option value="2" {{ request()->get('status') == '2' ? 'selected=selected' : '' }}>Delievered</option>
									<option value="3" {{ request()->get('status') == '3' ? 'selected=selected' : '' }}>On Hold</option>
								</select>
                  			</div>
                  			<div class="col-md-12">
                  				<table class="table table-striped">
									<thead>
										<tr>
											<th>Owner</th>
											<th>Product Name</th>
											<th>Price</th>
											<th>Purchaser Name</th>
											<th>Qty</th>
											<th>Purchase Date (MM/DD/YYYY)</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>	
										@foreach($sales_details as $sale )
											<tr>
												<td>
													{{ $sale->owner}}	
												</td>
												<td>
													{{ $sale->product_name }}
												</td>
												<td>
													{{ $sale->price }}
												</td>
												<td>
													{{ $sale->purchaser }}
												</td>
												<td>
													{{ $sale->qty }}
												</td>
												<td>
													{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sale->date)->format('m/d/Y') }}
												</td>
												<td>
													@if( $sale->owner == 'Website' )
														<select class="" id="change_product_status" data-sales-id="{{ $sale->id }}">
															<option value="0" {{ $sale->status ? '' : 'selected="selected"' }}>Pending</option>
															<option value="1" {{ $sale->status ? 'selected="selected"' : '' }}>Shipped</option>
															<option value="2" {{ $sale->status == 2 ? 'selected="selected"' : '' }}>Delievered</option>
															<option value="3" {{ $sale->status == 3 ? 'selected="selected"' : '' }}>On Hold</option>
														</select>
													@else
														@if( $sale->status == 1 )
															Shipped
														@elseif( $sale->status == 2 )
															Delievered
														@elseif( $sale->status == 3 )
															On Hold
														@else
															Pending
														@endif
													@endif
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								@if( count($sales_details) > 0 )
			                  		<div>
			                  			<p>
			                  				Records	{{ $start.' - '.$last.' of ' . $total }}	
			                  			</p>
			                  			{{ $sales_details->links() }}
			                  		</div>
		                  		@endif
								<form action="" method="post" id="update_status_form">
									{{ csrf_field() }}
									<input type="hidden" name="id">
									<input type="hidden" name="status">
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
		$(document).on('change','#change_product_status',function(e){
			if( $(this).val() != '' ){
				var a = $(document).find('#update_status_form');
				a.attr('action','{{ route("admin.sales.progress.update.status") }}');
				a.find('input[name="id"]').val($(this).data('sales-id'));
				a.find('input[name="status"]').val($(this).val());
				a.submit();
			}
		});

		$(document).on('change','#select_owner_type',function(e){
			if( $(this).val() != '' ){
				location.href = '{{ route("admin.product.history") }}' + '?type=' + $(this).val()
			}
		});

		$(document).on('change','#select_owner',function(e){
			if( $(this).val() != '' ){
				location.href = '{{ route("admin.product.history") }}' + '?owner=' + $(this).val()
			}
		});

		$(document).on('change','#select_purchaser',function(e){
			if( $(this).val() != '' ){
				location.href = '{{ route("admin.product.history") }}' + '?purchaser=' + $(this).val()
			}
		});

		$(document).on('change','#select_action',function(e){
			if( $(this).val() != '' ){
				location.href = '{{ route("admin.product.history") }}' + '?status=' + $(this).val()
			}
		});
	</script>
@endpush