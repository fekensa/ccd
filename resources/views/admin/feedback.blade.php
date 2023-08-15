@extends('ccd')

	@section('content')
	
		<div class="panel panel-primary feedback">
	    	<div class="panel-heading">
	    		<p class="panel-title">Feedbacks</p>
	        </div>
	        <div class="panel-body">
				@if ( !$feedbacks->count() )
					<p>There is no feedback till now. Try Later!!!</p>
				@else
					<div class="">
						@foreach( $feedbacks as $feedback )
						<div class="list-group">
							<div class="list-group-item">
								<h4>By: <strong>{{ $feedback->name }}</strong>, Send Timestamp: {{ $feedback->created_at->format('M d,Y \a\t h:i a') }} </h4>
								<h4>Email: {{ $feedback->email }}</h4>
								
							</div>
							<div class="list-group-item">
								<article>
									{{ $feedback->comment }}
								</article>
							</div>
						</div>
						@endforeach
						{!! $feedbacks->render() !!}
					</div>
				@endif
			</div>
		</div>
		<div class="clear"> </div>	
	@endsection
