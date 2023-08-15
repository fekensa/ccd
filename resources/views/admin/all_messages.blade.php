@extends('ccd')

	@section('content')
	
		<div class="panel panel-primary feedback">
	    	<div class="panel-heading">
	    		<p class="panel-title">Inbox</p>
	        </div>
	        <div class="panel-body">
	        	@if ( !$messages->count() )
				There is no message till now. Try again later!!!
				@else
				<div class="">
					@foreach( $messages as $message )
					<div class="list-group">
						<div class="list-group-item">
							<h3><a href="{{ url('/'.$message->id) }}"> {{ $message->sender}}</a></h3>
							<h4>Subject: <strong>{{ $message->subject }}</strong>, Send Timestamp: {{ $message->created_at->format('M d,Y \a\t h:i a') }} </a></h4>
							
						</div>
						<div class="list-group-item">
							<article>
								{{ $message->body }}
							</article>
						</div>
					</div>
					@endforeach
					{!! $messages->render() !!}
				</div>
				@endif
	        </div>
		</div>
		<div class="clear"> </div>	
	@endsection