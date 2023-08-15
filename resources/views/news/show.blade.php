@extends((Auth::check()) ? 'ccd' : 'news.news_header')	

	@section('content')		
				@if($news)
				<div class="panel panel-primary feedback">
		    	<div class="panel-heading">
		    		<p class="panel-title">Comments</p>
		        </div>
		        <div class="panel-body">
					<div class="">
						<div class="list-group">
							<div class="list-group-item">
									<h3><a href="{{ url('/news/'.$news->id) }}"> {{ $news->title}}</a>
										@if(!Auth::guest())
										<a style="float: right" href="{{ url('/edit_news/'.$news->id)}}">Edit New</a>
										@endif
									</h3>
									<h4>{{ $news->created_at->format('M d,Y \a\t h:i a') }} </a></h4>
								</div>
								<div class="list-group-item">
									<article>
										{{ $news->body }}
									</article>
								</div>
							</div>
						</div>
					<div>
						@if($news_comment)
						<h2>Comments</h2>
						<br>
						<ul style="list-style: none; padding: 0">
							@foreach($news_comment as $comments)
									<div class="list-group">
										<div class="list-group-item">
											<p>{{ $comments->created_at->format('M d,Y \a\t h:i a') }} by <strong>{{ $comments->name }}</strong></p>
										</div>
										<div class="list-group-item">
											<p>{{ $comments->comment }}</p>
										</div>
									</div>
							@endforeach
						</ul>
						@endif
					</div>
					<div>
						<h4>You can comment here</h4> <br>
						<form method="post" action="{{ url('/news_comment')}}">
							 {!! csrf_field() !!}
							<input type="hidden" name="on_news" value="{{ $news->id }}">
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<input value="{{ old('name') }}" placeholder="Enter your name" type="text" name="name" class="form-control" />
							</div>
							<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
								<textarea required="required"  name='comment' class="form-control" placeholder="Enter comment here">{{ old('comment') }}</textarea>
							</div>
							<input type="submit" name='reply_news' class="btn btn-success" value = "Comment"/>
						</form>	
					</div>
				</div>
			@else
			404 error
			@endif
	@endsection