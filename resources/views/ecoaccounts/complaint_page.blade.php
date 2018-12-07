@extends('............Downloads.CODE-06-02-2018.resources.views.layouts.default')
@push( 'custom-css' )
	<style type="text/css">
		/* Chat containers */
		#complaint_chat .container {
		    border: 2px solid #dedede;
		    background-color: #f1f1f1;
		    border-radius: 5px;
		    padding: 10px;
		    margin: 10px 0;
		}

		/* Darker chat container */
		#complaint_chat .darker {
		    border-color: #ccc;
		    background-color: #ddd;
		}

		/* Clear floats */
		#complaint_chat .container::after {
		    content: "";
		    clear: both;
		    display: table;
		}

		/* Style images */
		#complaint_chat .container img {
		    float: left;
		    max-width: 60px;
		    width: 100%;
		    margin-right: 20px;
		    border-radius: 50%;
		}

		/* Style the right image */
		#complaint_chat .container img.right {
		    float: right;
		    margin-left: 20px;
		    margin-right:0;
		}

		/* Style time text */
		#complaint_chat .time-right {
		    float: right;
		    color: #aaa;
		}

		/* Style time text */
		#complaint_chat .time-left {
		    float: left;
		    color: #999;
		}
	</style>
@endpush
@section('content')
<div style="position:absolute; top:80px; z-index:-1">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
                @if( session()->has('error') )
                    <script type="text/javascript">
                        alert('{{ session()->get("error") }}');
                    </script>
                @endif
                @if( session()->has('success') )
                    <script type="text/javascript">
                        alert('{{ session()->get("success") }}');
                        location.href = '{{ route(session()->get("route")) }}'
                    </script>
                @endif
            </div>
        </div>
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
										
									</th>
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
									<th>
										<strong>Ticket Status</strong>
									</th>
								</tr>
							</thead>

							<tbody>	
								@if( isset($items) )
									@foreach($items as $item )
										<tr>
											<td>
												<input type="radio" class="complaint_radio" data-id="{{ $item->id }}" name="complaint_radio">
											</td>
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
											<td>
												@if( $item->feedback )
													Open
												@else
													-
												@endif
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

                  	<div class="panel-body hide">
                  		<form class="form-horizontal" id="complaint_form" role="form" method="POST" action="">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $item->purchased_by }}">
                            <div class="form-group">
                                <label class="col-md-3 control-label" style="font-size: 15px;line-height: 10px;">
                                    <strong>
                                        Reason
                                    </strong>
                                </label>
                                <div class="col-md-7">
                                    <select name="reason">
                                    	<option value="">-Select Reason-</option>
                                    	@php	
                                    		$reasons = \DB::table('complaint_reason')->get();
                                    	@endphp
                                    	@foreach( $reasons as $reason )
                                    		<option value="{{ $reason->id }}">
                                    			{{ $reason->value }}
                                    		</option>
                                    	@endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" style="font-size: 15px;line-height: 10px;">
                                    <strong>
                                        Feedback
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="feedback" required=""></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-9">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                    <button class="btn btn-default" type="button" onclick="$('#complaint_form').parent().addClass('hide');$('.complaint_radio').prop('checked',false);return false;">Cancel</button>
                                </div>
                            </div>
                        </form>	
                  	</div>

                  	<div class="panel-body hide" id="complaint_chat"></div>

                  	<div class="panel-body hide" id="complaint_chat_textarea_box">
                  		<div class="container">
	                  		<div class="row">
	                  			<div class="col-md-12">
	                  				<textarea id="complaint_chat_textarea" class="form-control"></textarea>
	                  			</div>
	              				<div class="col-md-12">
	              					<button class="btn btn-info" id="complaint_chat_submit" data-u-id = '' data-f-id = '' style="margin-top: 10px;">Send</button>
	              				</div>
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
		var action = '{{ url("feedback") }}';

		$(document).on('click','.complaint_radio', function(e){
			var elee = $(this);
			// check if feedback is already submitted or not
			$.ajax({
				async : false,				
				url : '{{ route("feedback.exists") }}',
				data : {
					id : elee.data('id')
				},
				dataType : 'JSON',
				success: function(res){
					if( res.exists ){

						if( elee.is(':checked') ){
							$(document).find('#complaint_form').parent().addClass('hide');
							loadChat(res);
						}

					}
					else{
						if( elee.is(':checked') ){
							var form = $(document).find('#complaint_form');

							form.attr('action',action+'/'+ elee.data('id'));

							if( form.parent().hasClass('hide') ){
								form.parent().toggleClass('hide');
							}

							$(document).find('#complaint_chat_textarea_box').addClass('hide');
							$(document).find('#complaint_chat').addClass('hide');
						}
					}
				}
			});
		});

		function loadChat(d){

			$.ajax({
				async : false,
				url : '{{ route("chat.list") }}',
				method : 'POST',
				dataType : 'JSON',
				data : {
					user_id : d.user_id,
					feedback_id : d.feedback_id
				},
				success : function(res){
					if( res.error ){

					}
					else{
						var chat = $(document).find('#complaint_chat');
						var chat_textarea = $(document).find('#complaint_chat_textarea_box');

						var html = '';

						if( res.feedback ){
							html = html + '<div class="row">'+
												'<div class="col-md-12">'+
													'<h4 class=""> <strong>Reason:</strong> '+res.feedback.reason+'</h4>'+
													'<button class="btn btn-info" id="close_ticket" data-id="'+res.feedback.id+'">Close Ticket</button>'+
												'</div>'+	
											'</div>';
						}

						if( res.replies.length > 0 ){
							var c = '';
							$(res.replies).each(function(i,v){

								if( i % 2 == 0 ){
									c = 'darker';
								}
								else{
									c = '';
								}
								html = html + '<div class="container '+c+'">'+
								  	'<h4 class="">'+v.u+v.role+ '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' +v.created_at+'</h4>'+
								  	'<p>'+v.reply+'</p>'+
								  	'<span class="time-left"></span>'+
								'</div>';
							});
						}

						if( res.feedback ){
							html = html + '<div class="container">'+
										'<h4 class="">'+res.feedback.u_name+ '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+res.feedback.created_at+'</h4>'+
										'<p>'+res.feedback.feedback+'</p>'+
										'<span class="time-left">'+res.feedback.created_at+'</span>'+
									'</div>';
						}

						chat.html(html);

						$(document).find('#complaint_chat_submit').attr('data-u-id', d.user_id);
						$(document).find('#complaint_chat_submit').attr('data-f-id', d.feedback_id);

						if( chat.hasClass('hide') ){
							chat.toggleClass('hide');
						}

						if( chat_textarea.hasClass('hide') ){
							chat_textarea.toggleClass('hide');
						}
					}
				}
			});
		}

		$(document).on('click','#complaint_chat_submit',function(e){
			e.preventDefault();

			$.ajax({
				url : '{{ route("submit.reply") }}',
				method : 'POST',
				dataType : 'JSON',
				data : {
					user_id : $(this).data('u-id'),
					feedback_id : $(this).data('f-id'),
					reply : $(document).find('#complaint_chat_textarea').val()
				},
				success : function(res){
					if( res.error ){
						alert(res.msg);
					}
					else{
						loadChat(res);
						$(document).find('#complaint_chat_textarea').val('');
						$(document).find('#complaint_chat_textarea').text('');
						alert(res.msg);
					}
				}
			});
		});

		$(document).on('click','#close_ticket',function(e){
			e.preventDefault();

			var confirm = window.confirm("Are you sure you want to close this ticket?");

			if( confirm ){
				$.ajax({
					url : '{{ route("close.ticket") }}',
					method : 'POST',
					dataType : 'JSON', 
					data : {
						feedback_id : $(this).data('id')
					},
					success : function( res ){
						if( res.error ){
							alert(res.msg);
						}
						else{
							$(document).find('#complaint_chat_textarea_box').addClass('hide');
							$(document).find('#complaint_chat').addClass('hide');
							$(document).find('input[type="radio"]').prop('checked',false);
							alert(res.msg);
						}
					}
				});
			}
		});
	</script>
@endpush