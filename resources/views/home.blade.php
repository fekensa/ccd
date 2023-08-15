@include('header')

<body id="ccd-page" class="ccd-page" data-spy="scroll" data-target=".header" data-offset="60">  <!--body start here-->
	<div class="header">	
		<img src="{{ asset('images/logos/ccd.PNG') }}" class="ccd-logo" alt="CCD LOGO">
		<div class="header-top">
				<div class="wrap">
						<div class="top-header-left">
							<p>Marketing: +251-11-618-71-03</span></p>
						</div>
						<div class="right-left">
							<ul>
								<li class="login"><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-briefcase"></span> LOGIN</a></li>
							</ul>
						</div>
						<div class="clear"> </div>
			   </div>
	    </div>
	    <div class="header-bottom">
		  <div class="wrap">
				<div class="top-nav">
						<ul class="ccd-menu">
							<li class="active"><a href="#ccd-page" class="ccd-page">Home</a></li>
							<li ><a href="#info-ccd" class="info-ccd">House Types</a></li>														
							<li ><a href="#contact-ccd" class="contact-ccd">Contact Us</a></li>
							<li ><a href="#about-ccd" class="about-ccd">About</a></li>
							<li ><a href="{{ url('/new/'.'New')}}" class="news_info">News and Info</a></li>
							<li ><a href="#feedback-ccd" class="feedback-ccd">feedback</a></li>
						</ul>
			    </div>
				<div class="clear"></div> 
			</div>
		</div>
	</div>
	<!-- Slider -->
		<div class="slider">
		  <div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="images/slides/banner1.jpg" data-thumb="images/slides/banner1.jpg" alt="" />
	                <img src="images/slides/banner2.jpg" data-thumb="images/banner21.jpg" alt="" />
	                <img src="images/slides/banner3.jpg" data-thumb="images/banner31.jpg" alt="" />
	                <img src="images/slides/banner4.jpg" data-thumb="images/banner41.jpg" alt="" />
	                <img src="images/slides/banner5.jpg" data-thumb="images/banner51.jpg" alt="" />
	                <img src="images/slides/banner6.jpg" data-thumb="images/banner61.jpg" alt="" />
	                <img src="images/slides/banner7.jpg" data-thumb="images/banner71.jpg" alt="" />
	                <img src="images/slides/banner8.jpg" data-thumb="images/banner81.jpg" alt="" />
	                <img src="images/slides/banner9.jpg" data-thumb="images/banner91.jpg" alt="" />
	                <img src="images/slides/banner10.jpg" data-thumb="images/banner101.jpg" alt="" />
	            </div>
	        </div>
	    </div>
   	<!--End Slider-->
   	<div class="ccd-dream">
   		<p>CCD - A place for your dream home</p>
   	</div>
   	<div id="info-ccd">
		   <div class="wrap">
		   		<div class="module-title">
                	<h2 class="title">House types</h2>
				</div>
				<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-A-L.jpg" class="swipebox" title="Type A House"> <img src="images/swipebox/TYPE-A.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type A - 3,500,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 310.18 Sq.meters, Plot Area 1,000 Sq.meters</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-B-L.jpg" class="swipebox" title="Type B House"> <img src="images/swipebox/TYPE-B.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type B - 3,300,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 372.18 Sq.meters, Plot Area 1,000 Sq.meters</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-C-L.jpg" class="swipebox" title="Type C House"> <img src="images/swipebox/TYPE-C.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type C - 3,100,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 429.81 Sq.meters, Plot Area 1,000 Sq.meters</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-D-L.jpg" class="swipebox" title="Type D House"> <img src="images/swipebox/TYPE-D.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type D - 2,900,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 413.58 Sq.meters, Plot Area 1,000 Sq.meters </p>
					</div>
					<div class="clear"></div>
		   		</div>
		   		<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-E-L.jpg" class="swipebox" title="Type E House"> <img src="images/swipebox/TYPE-E.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type E - 2,900,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 497.54 Sq.meters, Plot Area 1,000 Sq.meters </p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-F-L.jpg" class="swipebox" title="Type F House"> <img src="images/swipebox/TYPE-F.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type F - 2,700,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 374.24 Sq.meters, Plot Area 1,000 Sq.meters </p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-G-L.jpg" class="swipebox" title="Type G House"> <img src="images/swipebox/TYPE-G.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type G - 2,600,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 426.85 Sq.meters, Plot Area 1,000 Sq.meters </p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-H-L.jpg" class="swipebox" title="Type H House"> <img src="images/swipebox/TYPE-H.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type H - 2,500,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 513.06 Sq.meters, Plot Area 1,000 Sq.meters </p>
					</div>
					<div class="clear"></div> 
				</div>
				<!--<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-I-L.jpg" class="swipebox" title="Type H House"> <img src="images/swipebox/TYPE-I.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type H - 2,350,000 ETB</h4>
						<p>3 Bedroom Type, G+1, Total Floor Area 407.07 Sq.meters, Plot Area 1,000 Sq.meters </p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/swipebox/TYPE-J-L.jpg" class="swipebox" title="Type H House"> <img src="images/swipebox/TYPE-J.jpg" alt=""><span class="zoom-icon"></span> </a>
						<h4>Type H - 2,350,000 ETB</h4>
						<p>3 Bedroom Type, Ground Floor, Total Floor Area 352.90 Sq.meters, Plot Area 1,000 Sq.meters </p>
					</div>
					<div class="clear"></div> 
		   		</div><-->
   			</div>
   		</div>
   	</div>
	<div class="clear"></div> 
   	<div id="contact-ccd">
   		<div class="wrap">
   			<div class="module-title">
                	<h2 class="title">Contact CCD</h2>
			</div>
			<div class="google_map">
			      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7881.661747910288!2d38.7836841207663!3d8.98770551485067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2set!4v1461172603127" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="clear"></div>
		</div>   		
	</div>
   	<div class="clear"></div> 
   	<div id="about-ccd">
		<div class="wrap">
			<div class="module-title">
                	<h2 class="title">About CCD</h2>
			</div>
			<div class="about-img">	
				<img src="images/logos/ccd2.PNG" class="ccd-logo-about" alt="CCD LOGO">
			</div>
			<div class="about-content">
				<details> 
					<p><strong>Country Club Developers (CCD)</strong> is a real estate company in Ethiopia founded in 1998 Ethiopian Calendar. </p>
					<br>
					<p>At CCD we provide houses of different typologies with architectural styles varying from Classical, to Mediterranean, 
						to Colonial, to Modern.
					</p> 
					<br>
					<p>Each house has a plot area of 1000 m.sq or 10764 ft.sq. Where the houses rest on an area ranging 
						from 282-513 sq.m. There are a total number of 1100 plots within 160 ha. Site area.
					</p>
					<br>
					<p>
						A number of facilities are provided including :- Clinic, Supermarket, Kindergarten, School, Library, Gymnasium, Golf Course, 
						Swimming pool, Tennis Court, Conference Hall, Health Center and other Public Facilities
					</p>
					<br>
				</details>
			</div>
			<div class="clear"></div> 
			<div class="ccd-mission">
				<p><strong>Mission:- </strong>Country Club Developers (CCD) is a real estate company in Ethiopia founded in 1998 Ethiopian Calendar.</p>
			</div>
			<div class="clear"></div> 
			<br>
			<div class="ccd-vision">
				<p><strong>Vision:- </strong>At CCD we provide houses of different typologies with architectural styles varying from Classical, to Mediterranean, 
					to Colonial, to Modern. Each house has a plot area of 1000 m.sq or 1o764 ft.sq. Where the houses rest on an area ranging 
					from 282-513 sq.m. There are a total number of 1100 plots within 160 ha. Site area.
				</p>
			</div>
   		</div>
   	</div>
   	<div class="clear"></div>
	<div id="feedback-ccd">
   		<div class="wrap">
   			<div class="module-title">
                	<h2 class="title">Your Feedback will help us Improve our services</h2>
			</div>
			<form method="post" action="{{ url('/feedback') }}" >
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
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
				{!! csrf_field() !!}
				<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}" aria-describedby="name">
				</div>
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" aria-describedby="email">
				</div>
				<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
					<textarea rows="3" class="form-control" name="comment" id="comment" placeholder="Your Feedback" aria-describedby="comment">{{ old('comment') }}</textarea>
				</span>
				<br>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
@include('footer')