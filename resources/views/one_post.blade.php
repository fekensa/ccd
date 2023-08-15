@extends('ccd')

	@section('content')
		<div class="panel panel-primary feedback">
		    <div class="panel-heading">
		    	<p class="panel-title">Post Detail</p>
		    </div>
		    <div class="panel-body">
		    	<div class="">
					<div class="list-group">
						<div class="list-group-item">
							@if($post)
								{{ $post->title }}
								@if(!Auth::guest() && ($post->users_id == Auth::user()->id || Auth::user()->is_admin()))
									<a style="float: right"href="{{ url('/edit_post/'.$post->id)}}">Edit Post</a>
								@endif
							@else
								Page does not exist
							@endif
							@if($post)
							<h3>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By {{ $post->author->first_name }}</h3>
							<br>							
						</div>	
						<div class="list-group-item">
							<article>
								{!! $post->body !!}
							</article>
						</div>
					</div>
					<br>
					<div>
						<h2>Leave a comment</h2>
					</div>
					<br>
					<div>
						@if($comments)
						<ul style="list-style: none; padding: 0">
							@foreach($comments as $comment)
									<div class="list-group">
										<div class="list-group-item">
											<h3>{{ $comment->author->first_name }}</h3>
											<h3>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</h3>
										</div>
										<div class="list-group-item">
											<p>{{ $comment->comment }}</p>
										</div>
									</div>
							@endforeach
						</ul>
						@endif
					</div>
					<br>
							<form method="post" action="{{ url('/comment/add')}}">
								{!! csrf_field() !!}
								<input type="hidden" name="on_post" value="{{ $post->id }}">
								<div class="form-group">
									<textarea required="required" placeholder="Enter comment here" name = "body" class="form-control"></textarea>
								</div>
								<input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
							</form>					
				@else
				404 error
				@endif
			</div>
		</div>

	@endsection