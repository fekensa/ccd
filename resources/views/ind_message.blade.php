@extends('ccd')

	@section('content')

		@if($message)
			<div class="panel panel-primary feedback">
	    	<div class="panel-heading">
	    		<p class="panel-title">Inbox</p>
	        </div>
	        <div class="panel-body">
				<div class="">
					<div class="list-group">
						<div class="list-group-item">
								<h3><a href="{{ url('/'.$message->id) }}"> {{ $message->sender}}</a></h3>
								<input type="hidden" name="subject" value="{{ $message->subject }}">
								<input type="hidden" name="sender" value="{{ $message->sender}}">
								<h4>Subject: <strong>{{ $message->subject }}</strong>, Send Timestamp: {{ $message->created_at->format('M d,Y \a\t h:i a') }} </a></h4>
								
							</div>
							<div class="list-group-item">
								<article>
									{{ $message->body }}
								</article>
							</div>
						</div>
					</div>
				<div>
					@if($message_replies)
					<h2>Replies</h2>
					<br>
					<ul style="list-style: none; padding: 0">
						@foreach($message_replies as $replies)
								<div class="list-group">
									<div class="list-group-item">
										<p>{{ $replies->created_at->format('M d,Y \a\t h:i a') }} </p>
									</div>
									<div class="list-group-item">
										<p>{{ $replies->body }}</p>
									</div>
								</div>
						@endforeach
					</ul>
					@endif
				</div>
				<div>
					<h4>You can reply here</h4>
					<form method="post" action="{{ url('/mess_reply')}}">
						 {!! csrf_field() !!}
						<input type="hidden" name="on_message" value="{{ $message->id }}">
						<input type="hidden" name="subject" value="{{ $message->subject }}">
						<input type="hidden" name="receiver" value="{{ $message->sender}}">
						<div class="form-group">
							<textarea required="required" placeholder="Enter your reply here" name = "body" class="form-control"></textarea>
						</div>
						<input type="submit" name='reply_message' class="btn btn-success" value = "Reply"/>
					</form>	
				</div>
			</div>
		@else
		404 error
		@endif

	@endsection
