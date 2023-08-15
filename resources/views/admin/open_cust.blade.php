@extends('ccd')	

	@section("content")

	<div class="panel panel-primary ccd-login">
	    	<div class="panel-heading">
	    		<p class="panel-title">Select Customer</p>
	        </div>
	        <div class="panel-body">
	        	<form method="post" action="{{ url('/to_cust_profile') }}">
                    {!! csrf_field() !!}
					<div class="input-group">
			            <span class="input-group-addon"></span>
			                <select name="customer" id="customer" class="form-control">
			                @foreach( $custs as $cust )
			                    <option value="{{$cust->id}}">{{$cust->id}},{{$cust->first_name}} {{$cust->middle_name}}</option>
			                @endforeach
			                </select>
			        </div>
					<br>
	                <button class="btn btn-primary" type="submit">Open Profile</button>
	             </form>
			</div>
		</div>
		<div class="clear"> </div>		

	@endsection