@extends('ccd')

	@section('content')
		<div class="panel panel-primary feedback">
		    <div class="panel-heading">
		    	<p class="panel-title">Edit Post</p>
		    </div>
		    <div class="panel-body">
				<form method="post" action="{{ url('/update_post') }}">
				{!! csrf_field() !!}
					<input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">
					<div class="form-group">
						<input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
					</div>
					<div class="form-group">
						<textarea name='body'class="form-control">
							@if(!old('body'))
							{!! $post->body !!}
							@endif
							{!! old('body') !!}
						</textarea>
					</div>
					<input type="submit" name='publish' class="btn btn-success" value = "Update"/>
				</form>
			</div>
		</div>
	@endsection
