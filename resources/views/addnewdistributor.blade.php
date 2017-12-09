@extends('layouts.default')

@section('content')
<div class="container-fluid" style="position:absolute; top:52px; z-index:-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
					<div class="panel-heading">Add New Distributor</div>
                   <div class="panel-body">
                        
						@if ($act == 'addnewdistributor')
							
						<?php 
							echo 'current time :'  . date('Y-m-d H:i:s');
							echo '<br />current timezone: ' . date_default_timezone_get();
							echo "<br /><br /><pre>";print_r(htmlentities($envelope));echo "</pre>";
							print_r($response);
						?>
							
						@else
							<form class="form-horizontal" role="form" method="POST" action="">
								<input type="hidden" name="_token" value="{{ csrf_token() }}" />
								<input type="hidden" name="act" value="addnewdistributor" />
								 <div class="form-group">
									<label class="col-md-4 control-label">Email</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="email" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">First Name</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="first_name" >
									</div>
								</div>

								 <div class="form-group">
									<label class="col-md-4 control-label">Last Name</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="last_name" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Address Line 1</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="address1" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Address Line 2</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="address2" >
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">State</label>
									<div class="col-md-6">
										<select required id="state" class="form-control" name="state" >
											<?php
												$st = '';
												foreach($states as $k => $state){
													if(!$st){$st = $k;}
													echo '<option value="'.$k.'">'.$state.'</option>';
												}
											?>
										</select>
										
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">City</label>
									<div class="col-md-6">
										<select required class="form-control" id="city" name='city' >
											<?php
												foreach($cities_states[$st] as $city){
													echo '<option value="'.ucwords(strtolower($city)).'">'.ucwords(strtolower($city)).'</option>';
												}
											?>
										</select>
										
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Postal Code</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="postal_code" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Country</label>
									<div class="col-md-6">
										<select required class="form-control" name="country" >
											<option value="">Select Country</option>
											<?php
												
												foreach($cuntries as $k => $v){
													$sel = ($k == 'USA')?'selected="selected"':'';
													echo '<option value="'.$k.'" '.$sel.'>'.$v.'</option>';
												}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Day Phone</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="day_phone" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Evening Phone</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="evening_phone" >
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Social Security Number</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="ssn" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Date Of Birth</label>
									<div class="col-md-6">
										<input required type="text" class="form-control" placeholder="format: mm-dd-yyyy " name="dob" >
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										 <button type="submit" class="btn btn-primary">
											  Create Account
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
<script>
	var cities_states = <?php echo json_encode($cities_states);?>;
	jQuery(document).ready(function(e){
		jQuery("#state").change(function(e){
			var st = jQuery(this).val();
			var st_cities = cities_states[st];
			var city_str = '';
			for(var i in st_cities){
				city_str += '<option value="'+capitalize(st_cities[i])+'">'+capitalize(st_cities[i])+'</option>';
			}
			jQuery('#city').html(city_str);
			
		});
	});
	function capitalize(string) {
		return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
	}
</script>
@endsection