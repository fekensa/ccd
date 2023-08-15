@extends('ccd')

	@section('content')

		<div class="panel panel-primary feedback">
		    <div class="panel-heading">
		    	<p class="panel-title">Profile</p>
		    </div>
		    <div class="panel-body">
		    	<div>
					<ul class="list-group">
						<li class="list-group-item">
							<h2>{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</h2> Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}
						</li>
						<li class="list-group-item ">
							<style>
								.table-padding td{
										padding: 3px 8px;
								}
							</style>
							<table class="table-padding">
								<tr>
									<td>Email</td>
									<td>{{$user->email}}</td>
								</tr>
								<tr>
									<td>Mobile</td>
									<td>{{$user->mobile}}</td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>{{$user->phone}}</td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>{{$user->gender}}</td>
								</tr>								
							</table>
						</li>
						<li class="list-group-item">
							<h2>Address</h2> 
						</li>
						<li class="list-group-item">
							<table class="table-padding">
								<tr>
									<td>Country</td>
									@if($user->addresses)
										<td>{{$user->addresses->country}}</td>
									@endif									
								</tr>
								<tr>
									<td>Region or State</td>
									@if($user->addresses)
										<td>{{$user->addresses->region_or_state}}</td>
									@endif
								</tr>
								<tr>
									<td>City</td>
									@if($user->addresses)
										<td>{{$user->addresses->city}}</td>
									@endif
								</tr>
								<tr>
									<td>Sub City</td>
									@if($user->addresses)
										<td>{{$user->addresses->subcity}}</td>
									@endif
								</tr>
								<tr>
									<td>Woreda</td>
									@if($user->addresses)
										<td>{{$user->addresses->woreda}}</td>
									@endif
								</tr>
								<tr>
									<td>Kebele</td>
									@if($user->addresses)
										<td>{{$user->addresses->kebele}}</td>
									@endif
								</tr>								
							</table> 
						</li>
					</ul>
				</div>
				<br>
				<a href="{{ url('/edit_user/'.$user->id)}}"><button class="btn btn-primary">Edit Profile</button></a>
		    </div>
		</div>
	@endsection