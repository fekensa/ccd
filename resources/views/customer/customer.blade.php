@extends('ccd')	

	@section("content")

		<div>
			<div class="wrap">
		   		<div class="module-title">
                	<p>Welcome {{ Auth::user()->first_name }} this is your current house status Information</p>
                	@if(Auth::user()->houses)
                		<h3>House Type {{ Auth::user()->houses->house_type }}, Progress - {{ Auth::user()->houses->progress_in_percent }}%, construction Site - {{ Auth::user()->houses->site_name }}</h3>	 
          	
                	@endif
				</div>
				<div class="section group">
				@foreach ($images as $image)
					<div class="grid_1_of_4 images_1_of_4">
						<a href="uploads/{{ $image->photo }}" class="swipebox" title="{{ $image->title }}"> <img src="uploads/{{ $image->photo }}" alt=""><span class="zoom-icon"></span> </a>
						<h4>{{ $image->title }}</h4>
					</div>
				@endforeach
					<div class="clear"></div>
		   		</div>
   			</div>
   		</div>
	@endsection