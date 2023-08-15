@extends('ccd')	

	@section("content")
		<div class="panel panel-primary ccd-login">
	    	<div class="panel-heading">
	    		<p class="panel-title">CCD Login</p>
	        </div>
	        <div class="panel-body">
	    		@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
	        	<form method="post" action="{{ url('/authenticate') }}">
                    {!! csrf_field() !!}
					<div class="input-group form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	                    <span class="input-group-addon" ><span class="glyphicon glyphicon-user" ></span></span>
	                    <input type="text" class="form-control" name="username" id="username" placeholder="Username*" value="{{ old('username') }}"aria-describedby="username">
	                </div>   
	                <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                    <span class="input-group-addon" ><span class="glyphicon glyphicon-briefcase" ></span></span>
	                    <input type="password" class="form-control" name="password" id="password" placeholder="Password*" aria-describedby="password">
	                </div> 
					<div class="input-group">
	                    <span class="input-group-addon">Login As</span>
	                    <select name="role" id="role" class="form-control">
	                    	<option value="Customer">Customer</option>
	                    	<option value="Administrator">Administrator</option>
	                    </select>
	                </div> 
        			<br>
        			<div class="input-group">
						<input type="checkbox" name="remember"> Remember Me
						<a class="btn btn-link" href="{{ url('/') }}">Forgot Your Password?</a>
					</div>
	                <button class="btn btn-primary" type="submit">Login</button>
	             </form>
			</div>
		</div>
		<div class="clear"> </div>	
	@endsection