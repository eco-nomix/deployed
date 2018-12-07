@extends('...layouts.default')
@section('content')
<div style="position:absolute; top:80px; z-index:-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Product History
					</div>
                  	<div class="panel-body">
                  		<table class="table table-striped">
							<thead>
								<tr>
									<th>
										<strong>Product Name</strong>
									</th>
									<th>
										<strong>Price</strong>
									</th>
									<th>
										<strong>Qty</strong>
									</th>
									<th>
										<strong>Status</strong>
									</th>
									<th>
										<strong>Purchase Date (MM/DD/YYYY)</strong>
									</th>
								</tr>
							</thead>

							<tbody>	
								@if( isset($items) )
									@foreach($items as $item )
										<tr>
											<td>
												{{ $item->product_name }}
											</td>
											<td>
												{{ $item->price }}
											</td>
											<td>
												{{ $item->qty }}
											</td>
											<td>
												@if( $item->status == 1 )
													Shipped
												@elseif( $item->status == 2 )
													Delievered
												@elseif( $item->status == 3 )
													On Hold
												@else
													Pending
												@endif
											</td>
											<td>
												{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$item->date)->format('m/d/Y') }}
											</td>
										</tr>
									@endforeach

								@else

									<tr>
										<td>
											<h3>
												You didn't buy any product yet
											</h3>
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