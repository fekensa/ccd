@extends('ccd')	

	@section("content")

	<div class="panel panel-primary ccd-login">
	    	<div class="panel-heading">
	    		<p class="panel-title">Upload Customer House Photos</p>
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
	    		@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form action="{{ url('/images.store') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="users_id" value="@if(!old('users_id')){{$user->id }}@endif{{ old('users_id') }}">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <input type="text" name="title" class="form-control" placeholder="Write title for your image...">
                    </div>
                    <div class="form-group">
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

			</div>
		</div>
		<div class="clear"> </div>		

	@endsection