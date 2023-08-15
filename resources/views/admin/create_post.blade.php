@extends('ccd')

	@section('content')
		<div class="panel panel-primary ccd-login">
		    <div class="panel-heading">
		    	<p class="panel-title">Create New Post</p>
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
		    	<form action="{{ url('/save_post')}}" method="post">
					{!! csrf_field() !!}
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<input value="{{ old('title') }}" placeholder="Enter title here" type="text" name="title" class="form-control" />
					</div>
					<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
						<textarea name='body' class="form-control" placeholder="Enter detail here">{{ old('body') }}</textarea>
					</div>
					<input type="submit" name='publish' class="btn btn-primary" value = "Publish"/>
				</form>
		    </div>
		</div>
	@endsection
