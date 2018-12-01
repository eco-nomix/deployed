@extends('...layouts.default')

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

						Sales Progress Report

					</div>

                  	<div class="panel-body">

                  		<table class="table table-striped">

							<thead>

								<tr>

									<th>ID</th>

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

											{{ $sale->id}}	

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

											<select class="" id="change_product_status" data-sales-id="{{ $sale->id }}">

												<option value="0" {{ $sale->status ? '' : 'selected="selected"' }}>Pending</option>

												<option value="1" {{ $sale->status ? 'selected="selected"' : '' }}>Shipped</option>

												<option value="2" {{ $sale->status == 2 ? 'selected="selected"' : '' }}>Delievered</option>
												
												<option value="3" {{ $sale->status == 3 ? 'selected="selected"' : '' }}>On Hold</option>
											</select>

										</td>

									</tr>

								@endforeach



							</tbody>

						</table>

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



@endsection



@push('custom')

	

	<script type="text/javascript">

		$(document).on('change','#change_product_status',function(e){

			if( $(this).val() != '' ){



				var a = $(document).find('#update_status_form');

				a.attr('action','{{ route("distributor.sales.progress.update.status") }}');

				a.find('input[name="id"]').val($(this).data('sales-id'));

				a.find('input[name="status"]').val($(this).val());

				a.submit();



			}

		});

	</script>



@endpush