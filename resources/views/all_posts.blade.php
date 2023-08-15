@extends('ccd')

	@section('content')
		<div class="panel panel-primary feedback">
		    <div class="panel-heading">
		    	<p class="panel-title">List of Posts</p>
		    </div>
		    <div class="panel-body">
		    @if ( !$posts->count() )
			There is no post till now. Try Later!!!
			@else
			<div class="">
				@foreach( $posts as $post )
				<div class="list-group">
					<div class="list-group-item">
						<h3><a href="{{ url('/one_post/'.$post->id)}}">{{ $post->title }}</a>
							@if(!Auth::guest() && ($post->users_id == Auth::user()->id || Auth::user()->is_admin()))
								@if($post->active == '1')
									<a style="float: right" href="{{ url('/edit_post/'.$post->id)}}">Edit Post</a>
								@endif
							@endif
						</h3>
						<h3>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By {{ $post->author->first_name }}</h3>
						
					</div>
					<div class="list-group-item">
						<article>
							{{$post->body}}
						</article>
					</div>
				</div>
				@endforeach
				{!! $posts->render() !!}
			</div>
			@endif

		    </div>
		</div>
	@endsection