@extends('ccd')	

	@section("content")	
		<div class="panel panel-primary add-customer">
	    	<div class="panel-heading">
	    		<p class="panel-title">Add new User</p>
	        </div>
	        <div class="panel-body">	    
	     	@if (Session::has('message'))
				<div class="flash alert-info">
						{{ Session::get('message') }}
					</p>
				</div>
			@endif  
			@if (Session::has('error'))
				<div class="flash alert-error">
						{{ Session::get('error') }}
					</p>
				</div>
			@endif      
			<br>
			<form method="post" action="{{ url('/add_user') }}">
		        {!! csrf_field() !!}
	        	<div class="panel panel-primary add-basic-info">
			    	<div class="panel-heading">
			    		<p class="panel-title">Basic Information</p>
			        </div>
			        <div class="panel-body">
							<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name*" value="{{ old('first_name') }}">
			                </div>   
							<div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="middle name*" value="{{ old('middle_name') }}">
			                </div>   
			                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" value="{{ old('last_name') }}">
			                </div>  
			                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="email" id="email" placeholder="email*" value="{{ old('email') }}">
			                </div>
			                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" value="{{ old('mobile') }}">
			                </div> 
							<div class="input-group">
			                    <span class="input-group-addon">Gender</span>
			                    <select name="gender" id="gender" class="form-control">
			                    	<option value="Male">Male</option>
			                    	<option value="Female">Female</option>
			                    </select>
			                </div> 	            
			                <br>    
							<div class="input-group">
			                    <span class="input-group-addon">Role</span>
			                    <select name="role" id="role" class="form-control">
			                    	<option value="Customer">Customer</option>
			                    	<option value="Administrator">Administrator</option>
			                    </select>
			                </div>
			                <br>
			                <br>
			        </div>
			    </div>
			    <div class="panel panel-primary add-address">
			    	<div class="panel-heading">
			    		<p class="panel-title">Customer House and Address</p>
			        </div>
			        <div class="panel-body">
			        		<div class="input-group">
			                    <span class="input-group-addon">House Type</span>
			                    <select name="house_type" id="house_type" class="form-control">
			                    	<option value="A">A</option>
			                    	<option value="B">B</option>
			                    	<option value="C">C</option>
			                    	<option value="D">D</option>
			                    	<option value="E">E</option>
			                    	<option value="F">F</option>
			                    	<option value="G">G</option>
			                    	<option value="H">H</option>
			                    	<option value="I">I</option>
			                    	<option value="J">J</option>
			                    </select>
			                </div> 	      
			                <br>
							<div class="form-group{{ $errors->has('site_name') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="site_name" id="site_name" placeholder="Site name*" value="{{ old('site_name') }}">
			                </div>   
			                <hr>
							<div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="region" id="region'" placeholder="region or state" value="{{ old('region') }}">
			                </div>   
			                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="city" id="city" placeholder="city" value="{{ old('city') }}">
			                </div>  
			                <div class="form-group{{ $errors->has('subcity') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="subcity" id="subcity" placeholder="subcity" value="{{ old('subcity') }}">
			                </div>
			                <div class="form-group{{ $errors->has('woreda') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="woreda" id="woreda" placeholder="woreda" value="{{ old('woreda') }}">
			                </div>
			                <div class="form-group{{ $errors->has('kebele') ? ' has-error' : '' }}">
			                    <input type="text" class="form-control" name="kebele" id="kebele" placeholder="kebele" value="{{ old('kebele') }}">
			                </div>            	
			        </div>
			    </div>
			<div class="clear"> </div>	
			<button class="btn btn-primary" type="submit">Add User</button>
			</form>
			</div>
		</div>
	@endsection