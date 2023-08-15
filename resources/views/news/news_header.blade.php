@include('header')
	
	<body>  <!--body start here-->
		<div class="ccd-container">
			<div class="header">	
					<img src="{{asset('/images/logos/ccd.PNG')}}" class="ccd-logo" alt="CCD LOGO">
					<div class="header-top">
						<div class="wrap">
								<div class="top-header-left">
									<p>Marketing: +251-11-618-71-03</p>
								</div>
								<div class="right-left">			
									<ul>
										<li class="login"><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span></span> HOME</a></li>
										<li class="login"><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-briefcase"></span> LOGIN</a></li>
									</ul>
							</div>
				    	</div>
				   		<div class="clear"></div>
				    </div>
				</div>
				<div class="user-header-bottom">
				  <div class="wrap">
						<div class="top-nav">
								<ul class="ccd-menu">
									<li ><a href="{{ url('/new/'.'New')}}" class="news">News</a></li>			
									<li ><a href="{{ url('/new/'.'Post')}}" class="posts">Posts</a></li>
									<li ><a href="{{ url('/new/'.'Vacancy')}}" class="all_vacancy">Vacancy</a></li>
								</ul>
					    </div>
						<div class="clear"></div> 
					</div>
				</div>				
				@yield("content")
		</div>

@include('footer')				