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
						<h3>Withdrawal Request</h3>
					</div>
                  	<div class="panel-body">
                  		<div class="col-md-12">
                  			<div class="col-md-1">
                  				
                  			</div>
                  			<div class="col-md-3">
                  				<select class="form-control filt" name="u">
                  					<option value="">-Select User-</option>
                  					@foreach( $user_list as $ul )
                  						<option value="{{ $ul->id }}" {{ request()->get('u') == $ul->id ? 'selected=selected' : '' }}>
                  							{{ $ul->first_name .' '. $ul->last_name }}
                  						</option>
                  					@endforeach
                  				</select>
                  			</div>

                  			<div class="col-md-3">
                  				<select class="form-control filt" name="d">
                  					<option value="">-Select Distributor-</option>
                  					@foreach( $dis_list as $dl )
                  						<option value="{{ $dl->id }}" {{ request()->get('d') == $dl->id ? 'selected=selected' : '' }}>
                  							{{ $dl->first_name .' '. $dl->last_name }}
                  						</option>
                  					@endforeach
                  				</select>
                  			</div>

                  			<div class="col-md-3">
                  				<select class="form-control filt" name="a">
                  					<option value="">-Select Action-</option>
                  						<option value="0" {{ request()->get('a') == '0' ? 'selected=selected' : '' }}>New Withdrawal</option>
                  						<option value="1" {{ request()->get('a') == '1' ? 'selected=selected' : '' }}>
                  							Transferred
                  						</option>
                  						<option value="2" {{ request()->get('a') == '2' ? 'selected=selected' : '' }}>
                  							Cheque Issued
                  						</option>
                  						<option value="3" {{ request()->get('a') == '3' ? 'selected=selected' : '' }}>
                  							On Hold
                  						</option>
                  				</select>
                  			</div>

                  			<div class="col-md-2">
                  				<button class="btn btn-primary" onclick="location.href='{{ route('admin.withdrawal.history') }}'">
                  					Show All Withdrawals
                  				</button>
                  			</div>
                  		</div>
                  		<div class="col-md-12">
                  			<table class="table table-striped">
	                  			<thead>
	                  				<tr>
	                  					<th>
	                  						Withdrawal Date
	                  					</th>
	                  					<th>
	                  						User Name
	                  					</th>
	                  					<th>
	                  						Type
	                  					</th>
	                  					<th>
	                  						Comm. Type
	                  					</th>
	                  					<th>
	                  						Total Bal.
	                  					</th>
	                  					<th>
	                  						Requested Amt.
	                  					</th>
	                  					<th>
	                  						Requested By
	                  					</th>
	                  					<th>
	                  						Processed At
	                  					</th>
	                  					<th>
	                  						Action
	                  					</th>
	                  				</tr>
	                  			</thead>
	                  			<tbody>
	                  				@if( count($withdrawal_request) > 0 )
		                  				@foreach( $withdrawal_request as $wr )
		                  					<tr>
		                  						<td>
		                  							{{ $wr->created_at->format('m/d/Y') }}
		                  						</td>
		                  						<td>
		                  							{{ $wr->user->first_name.' '.$wr->user->last_name }}
		                  						</td>
		                  						<td>
		                  							{{ $wr->user->is_distributor != 11 ? 'User' : 'Distributor' }}
		                  						</td>
		                  						<td>
		                  							{{ ucwords($wr->type) }}
		                  						</td>
		                  						<td>
		                  							{{ '$'.$wr->total_bal }}
		                  						</td>
		                  						<td>
		                  							{{ '$'.$wr->amount }}
		                  						</td>
		                  						<td>
		                  							{{ ucwords(str_ireplace('_',' ',$wr->request_type)) }}
		                  						</td>
		                  						<td>
		                  							{{ $wr->processed_at ? $wr->processed_at->format('m/d/Y') : '-' }}
		                  						</td>
		                  						<td>
		                  							@if( $wr->status == '1' )
		                  								Transferred
		                  							@elseif( $wr->status == '2' )
		                  								Cheque Issued
		                  							@elseif( $wr->status == '3' )
		                  								On Hold
		                  							@else
			                  							<select class="form-control change_withdrawal_status" data-req-id="{{ $wr->id }}">
															<option value="0" {{ $wr->status ? '' : 'selected=selected' }}>
																New Withdrawal
															</option>

															<option value="1" {{ $wr->status == 1 ? 'selected=selected' : '' }}>
																Transferred
															</option>

															<option value="2" {{ $wr->status == 2 ? 'selected=selected' : '' }}>
																Cheque Issued
															</option>

															<option value="3" {{ $wr->status == 3 ? 'selected=selected' : '' }}>
																On Hold
															</option>	
			                  							</select>
			                  						@endif
		                  						</td>
		                  					</tr>
		                  				@endforeach
		                  			@else
		                  				<tr>
		                  					<td>
		                  						No Withdrawal Request Yet
		                  					</td>
		                  				</tr>
		                  			@endif
	                  			</tbody>
	                  		</table>
	                  		@if( count($withdrawal_request) > 0 )
	                  		<div>
	                  			<p>
	                  				Records	{{ $wr_f.' - '.$wr_curr.' of ' . $wr_count }}	
	                  			</p>
	                  			{{ $wr_link->links() }}
	                  		</div>
	                  		@endif
	                  		<form action="{{ route('admin.update.withdrawal.satus') }}" method="post" id="update_status_form">
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
@endsection   

@push('custom')
	<script type="text/javascript">
		$(document).on('change','.change_withdrawal_status',function(e){
			if( $(this).val() ){

				var a = $(document).find('#update_status_form');
				a.find('input[name="id"]').val($(this).data('req-id'));
				a.find('input[name="status"]').val($(this).val());
				a.submit();

			}
		});

		$(document).on('change','.filt',function(e){
			e.preventDefault();
			if( $(this).attr('name') == 'd' ){
				location.href = '{{ route("admin.withdrawal.history") }}' + '?d='+$(this).val()
			}
			else if( $(this).attr('name') == 'u' ){
				location.href = '{{ route("admin.withdrawal.history") }}' + '?u='+$(this).val()
			}
			else if( $(this).attr('name') == 'a' ){
				location.href = '{{ route("admin.withdrawal.history") }}' + '?a='+$(this).val()
			}
		});
	</script>
@endpush