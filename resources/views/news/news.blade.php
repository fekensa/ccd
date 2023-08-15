@extends((Auth::check()) ? 'ccd' : 'news.news_header')	

	@section('content')
				<div class="panel panel-primary feedback">
				    <div class="panel-heading">
				    	<p class="panel-title">{{$type}}s</p>
				    </div>
				    <div class="panel-body">
				    @if ( !$news->count() )
					There is no {{$type}}s till now. Try Later!!!
					@else
					<div class="">
						@foreach( $news as $new )
						<div class="list-group">
							<div class="list-group-item">
								<h3><a href="{{ url('/news/'.$new->id)}}">{{ $new->title }}</a>
									@if(!Auth::guest())
										<a style="float: right" href="{{ url('/edit_news/'.$new->id)}}">Edit New</a>
									@endif
								</h3>
								<h3>Posted on {{ $new->created_at->format('M d, Y \a\t h:i a') }}</h3>								
							</div>
							<div class="list-group-item">
								<article>
									{!! str_limit($new->body, $limit = 1500, $end = '....... <a href='.url("/news/".$new->id).'>Read More</a>') !!}
								</article>
							</div>
						</div>
						@endforeach
						{!! $news->render() !!}
					</div>
					@endif

				    </div>
				</div>
	@endsection