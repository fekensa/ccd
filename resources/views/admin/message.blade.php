@extends('ccd')	

	@section("content")

	<div class="panel panel-primary ccd-login">
	    	<div class="panel-heading">
	    		<p class="panel-title">Compose New Message</p>
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
	        	<form method="post" action="{{ url('/admin_send') }}">
                    {!! csrf_field() !!}
					<div class="input-group">
			            <span class="input-group-addon">To</span>
			                <select name="to" id="to" class="form-control">
			                @foreach( $custs as $cust )
			                    <option value="{{$cust->id}}">{{$cust->id}},{{$cust->first_name}} {{$cust->middle_name}}</option>
			                @endforeach
			                </select>
			        </div>
			        <br>   
	                <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
	                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" aria-describedby="subject">
	                </div> 
					<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
						<textarea rows="3" class="form-control" name="body" id="body" placeholder="Body" aria-describedby="body" value="{{ old('body') }}"></textarea>
					</span>
					<br>
	                <button class="btn btn-primary" type="submit">Send</button>
	             </form>
			</div>
		</div>
		<div class="clear"> </div>		

	@endsection