@extends('ccd')

	@section('content')

		<div class="panel panel-primary feedback">
		    <div class="panel-heading">
		    	<p class="panel-title">Edit Profile</p>
		    </div>
		    <div class="panel-body">
		    	<form method="post" action="{{ url('/update_user') }}">
				{!! csrf_field() !!}
				<input type="hidden" name="user_id" value="{{ $user->id }}{{ old('user_id') }}">
				<input type="hidden" name="role" value="{{ $user->role }}{{ old('role') }}">
				<input type="hidden" name="gender" value="{{ $user->gender }}{{ old('gender') }}">
		    	<div>
					<ul class="list-group">
						<li class="list-group-item">
							<h2>Full Information</h2> 
						</li>
						<li class="list-group-item ">
							<style>
								.table-padding td{
										padding: 5px 40px;
								}
							</style>
							<table class="table-padding">
								<tr>
									<td>First Name</td>
									<td><input type="text" name="first_name" class="form-control" value="@if(!old('first_name')){{$user->first_name}}@endif{{ old('first_name') }}"/></td>
									<td>Country</td>
									@if($user->addresses)
										<td><input type="text" name="country" class="form-control" value="@if(!old('country')){{$user->addresses->country}}@endif{{ old('country') }}"/></td>
									@endif
								</tr>
								<tr>
									<td>Middle Name</td>
									<td><input type="text" name="middle_name" class="form-control" value="@if(!old('middle_name')){{$user->middle_name}}@endif{{ old('middle_name') }}"/></td>
									<td>Region or State</td>
									@if($user->addresses)
										<td><input type="text" name="region_or_state" class="form-control" value="@if(!old('region_or_state')){{$user->addresses->region_or_state}}@endif{{ old('region_or_state') }}"/></td>
									@endif
								</tr>
								<tr>
									<td>Last Name</td>									
									<td><input type="text" name="last_name" class="form-control" value="@if(!old('last_name')){{$user->last_name}}@endif{{ old('last_name') }}"/></td>
									<td>City</td>
									@if($user->addresses)
										<td><input type="text" name="city" class="form-control" value="@if(!old('city')){{$user->addresses->city}}@endif{{ old('city') }}"/></td>
									@endif
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="email" class="form-control" value="@if(!old('email')){{$user->email}}@endif{{ old('email') }}"/></td>
									<td>Sub City</td>
									@if($user->addresses)
										<td><input type="text" name="subcity" class="form-control" value="@if(!old('subcity')){{$user->addresses->subcity}}@endif{{ old('subcity') }}"/></td>
									@endif
								</tr>
								<tr>
									<td>Mobile</td>
									<td><input type="text" name="mobile" class="form-control" value="@if(!old('mobile')){{$user->mobile}}@endif{{ old('mobile') }}"/></td>
									<td>Woreda</td>
									@if($user->addresses)
										<td><input type="text" name="woreda" class="form-control" value="@if(!old('woreda')){{$user->addresses->woreda}}@endif{{ old('woreda') }}"/></td>
									@endif
								</tr>
								<tr>
									<td>Phone</td>
									<td><input type="text" name="phone" class="form-control" value="@if(!old('phone')){{$user->phone}}@endif{{ old('phone') }}"/></td>
									<td>Kebele</td>
									@if($user->addresses)
										<td><input type="text" name="kebele" class="form-control" value="@if(!old('kebele')){{$user->addresses->kebele}}@endif{{ old('kebele') }}"/></td>
									@endif
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="password" name="password" class="form-control"/></td>
								</tr>			
								@if (Auth::user()->is_admin())	
								@if($user->houses)
									<tr>
										<td>House Type</td>
										<td><input type="text" name="house_type" class="form-control" value="@if(!old('house_type')){{$user->houses->house_type}}@endif{{ old('house_type') }}"/></td>
										<td>Site Name</td>
										<td><input type="text" name="site_name" class="form-control" value="@if(!old('site_name')){{$user->houses->site_name}}@endif{{ old('site_name') }}"/></td>
									</tr>
									<tr>
										<td>Progress in Percent</td>
										<td><input type="number"name="progress_in_percent" class="form-control" value="@if(!old('progress_in_percent')){{$user->houses->progress_in_percent}}@endif{{ old('progress_in_percent') }}"/></td>
									</tr>	
								@endif	
								@endif
								@if (Auth::user()->is_cust())
								@if($user->houses)		
										<td><input type="hidden" name="house_type" class="form-control" value="@if(!old('house_type')){{$user->houses->house_type}}@endif{{ old('house_type') }}"/></td>
										<td><input type="hidden" name="site_name" class="form-control" value="@if(!old('site_name')){{$user->houses->site_name}}@endif{{ old('site_name') }}"/></td>
										<td><input type="hidden" name="progress_in_percent" class="form-control" value="@if(!old('progress_in_percent')){{$user->houses->progress_in_percent}}@endif{{ old('progress_in_percent') }}"/></td>
								@endif	
								@endif	
							</table>
						</li>
					</ul>
				</div>
				<br>
				<input type="submit" name='save' class="btn btn-primary" value="Save"/>
				</form>
		    </div>
		</div>
	@endsection