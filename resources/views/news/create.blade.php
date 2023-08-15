@extends('ccd')

	@section('content')
		<div class="panel panel-primary ccd-login">
		    <div class="panel-heading">
		    	<p class="panel-title">Create News</p>
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
		    	<form action="{{ url('/save_news')}}" method="post">
					{!! csrf_field() !!}
					<div class="input-group">
	                    <span class="input-group-addon">News Type</span>
	                    <select name="type" id="type" class="form-control">
	                    	<option value="New">News</option>
	                    	<option value="Post">Post</option>
	                    	<option value="Vacancy">Vacancy</option>
	                    </select>
	                </div>
	                <br>
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<input value="{{ old('title') }}" placeholder="Enter title here" type="text" name="title" class="form-control" />
					</div>
					<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
						<textarea name='body' class="form-control" placeholder="Enter detail here">{{ old('body') }}</textarea>
					</div>
					<input type="submit" name='publish' class="btn btn-primary" value="Publish"/>
				</form>
		    </div>
		</div>
	@endsection
