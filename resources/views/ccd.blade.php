@include('header')

<body>  <!--body start here-->
	<div class="ccd-container">
		@if (Auth::guest())
		<div class="header">	
			<img src="{{ asset('/images/logos/ccd.PNG') }}" class="ccd-logo" alt="CCD LOGO">
			<div class="header-top">
					<div class="wrap">
							<div class="top-header-left">
								<p>Marketing: +251-11-618-71-03</p>
							</div>
							<div class="right-left">
								<ul>
									<li class="login"><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span></span> HOME</a></li>
								</ul>				
							</div>
				    </div>
				   	<div class="clear"> </div>
		    </div>
		</div>
		<div class="panel panel-primary ccd-login">
	    	<div class="panel-heading">
	    		<p class="panel-title">CCD Login</p>
	        </div>
	        <div class="panel-body">
	    		@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
	        	<form method="post" action="{{ url('/authenticate') }}">
                    {!! csrf_field() !!}
					<div class="input-group form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	                    <span class="input-group-addon" ><span class="glyphicon glyphicon-user" ></span></span>
	                    <input type="text" class="form-control" name="username" id="username" placeholder="Username*" value="{{ old('username') }}" aria-describedby="username">
	                </div>   
	                <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                    <span class="input-group-addon" ><span class="glyphicon glyphicon-briefcase" ></span></span>
	                    <input type="password" class="form-control" name="password" id="password" placeholder="Password*" aria-describedby="password">
	                </div> 
					<div class="input-group">
	                    <span class="input-group-addon">Login As</span>
	                    <select name="role" id="role" class="form-control">
	                    	<option value="Customer">Customer</option>
	                    	<option value="Administrator">Administrator</option>
	                    </select>
	                </div> 
        			<br>
        			<div class="input-group">
						<input type="checkbox" name="remember"> Remember Me
					</div>
					<br>
	                <button class="btn btn-primary" type="submit">Login</button>
	             </form>
			</div>
		</div>
		<div class="clear"> </div>	
		@else
			@if (Auth::user()->is_admin())
				<div class="header">	
					<img src="{{ asset('/images/logos/ccd.PNG') }}" class="ccd-logo" alt="CCD LOGO">
					<div class="header-top">
						<div class="wrap">
								<div class="top-header-left">
									<p>Marketing: +251-11-618-71-03</span></p>
								</div>
								<div class="right-left">			
									<ul class="admin-top-menu">
										<li class="notification">
					                        <a href="{{ url('/feedback') }}"  data-toggle="tooltip" title="feedbacks">
					                        @if(Auth::user()->feedbacks->count() > 0)
					                            <span class="glyphicon glyphicon-bell"><span class="badge">{{Auth::user()->feedbacks->count()}}</span></span>
					                        </a>
					                        @endif
					                    </li>                    
					                    <li class="message">
					                        <a href="{{ url('/a_open_message') }}" data-toggle="tooltip" title="Messages">
					                        @if(Auth::user()->messages->count() > 0)
					                            <span class="glyphicon glyphicon-envelope"><span class="badge">{{Auth::user()->messages->count()}}</span></span>
					                        </a>
					                        @endif
					                    </li>
										<li class="dropdown li-one">
											<a href="#" class="dropdown-toggle a-one" data-toggle="dropdown">
					        					<span>{{ Auth::user()->first_name }} <span class="caret"></span></span>
					    					</a>
					    					<ul class="dropdown-menu">
					        					<!-- User image -->
					        					<li class="user-header bg-light-blue">
					            					<img src="{{ asset('/images/male_default.jpg') }}"  class="img-circle user_img" alt="User Image">
					            					<p>
					                					Administrator
					            					</p>
					        					</li>       
					        					<!-- Menu Footer-->
					        					<li class="user-footer">
					        						<div class="pull-left">
					                					<a href="{{ url('/logout') }}" class="btn btn-default">
					                                        <span class="glyphicon glyphicon-log-out"></span>
					                                        <span>Sign out</span>
					                                    </a>
					            					</div>
					        					</li>
					    					</ul>  
										</li>			
									</ul>			
							</div>
				    	</div>
				   		<div class="clear"> </div>
				    </div>
				</div>
				<div class="user-header-bottom">
				  <div class="wrap">
						<div class="top-nav">
								<ul class="ccd-menu">
									<li ><a href="{{ url('/admin') }}" class="open-account">Open Account</a></li>
									<li ><a href="{{ url('/post') }}" class="new-post">New Post</a></li>							
									<li ><a href="{{ url('/admin_message') }}" class="new-message">New Message</a></li>
									<li ><a href="{{ url('/add_news') }}" class="news">Add News</a></li>
									<li ><a href="{{ url('/new/'.'New') }}" class="all_news">News</a></li>
									<li ><a href="{{ url('/all_posts') }}" class="all_posts">Customer Posts</a></li>
									<li ><a href="{{ url('/new/'.'Post')}}" class="posts">All Posts</a></li>
									<li ><a href="{{ url('/new/'.'Vacancy')}}" class="all_vacancy">Vacancy</a></li>
									<li ><a href="{{ url('/open_cust') }}" class="update-cust">Edit Customer Data</a></li>
									<li ><a href="{{ url('/open_cust_upload') }}" class="cust_house">Upload Customer House</a></li>
									<!--<li ><a href="#" class="feedback-ccd">Reset Password</a></li>-->
								</ul>
					    </div>
						<div class="clear"></div> 
					</div>
				</div>		
				@yield("content")
			@endif
			@if (Auth::user()->is_cust())		
				<div class="header">	
					<img src="{{ asset('/images/logos/ccd.PNG') }}" class="ccd-logo" alt="CCD LOGO">
					<div class="header-top">
						<div class="wrap">
								<div class="top-header-left">
									<p>Marketing: +251-11-618-71-03</span></p>
								</div>
								<div class="right-left">			
									<ul class="admin-top-menu">
					                    <li class="message">
					                        <a href="{{ url('/c_open_message') }}" data-toggle="tooltip" title="Messages">
					                        @if(Auth::user()->messages->count() > 0)
					                            <span class="glyphicon glyphicon-envelope"><span class="badge">{{Auth::user()->messages->count()}}</span></span>
					                        </a>
					                        @endif
					                        </a>
					                    </li>
										<li class="dropdown li-one">
											<a href="#" class="dropdown-toggle a-one" data-toggle="dropdown">
					        					<span>{{ Auth::user()->first_name }} <span class="caret"></span></span>
					    					</a>
					    					<ul class="dropdown-menu">
					        					<!-- User image -->
					        					<li class="user-header bg-light-blue">
					            					<img src="{{ asset('/images/male_default.jpg') }}"  class="img-circle user_img" alt="User Image">
					            					<p>
					                					{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }}
					            					</p>
					        					</li>       
					        					<!-- Menu Footer-->
					        					<li class="user-footer">
						        					<div class="pull-left">
					                					<a href="{{ url('/user/'.Auth::id()) }}" class="btn btn-default">
					                                        <span class="glyphicon glyphicon-user"></span>
					                                        <span>Profile</span>
					                                    </a>
					            					</div>
					            					<div class="pull-right">
					                					<a href="{{ url('/logout') }}" class="btn btn-default">
					                                        <span class="glyphicon glyphicon-log-out"></span>
					                                        <span>Sign out</span>
					                                    </a>
					            					</div>
					        					</li>
					    					</ul>  
										</li>			
									</ul>			
							</div>
				    	</div>
				   		<div class="clear"> </div>
				    </div>
				</div>
				<div class="user-header-bottom">
				  <div class="wrap">
						<div class="top-nav">
								<ul class="ccd-menu">
									<li ><a href="{{ url('/cust') }}" class="home">Home</a></li>			
									<li ><a href="{{ url('/cust_message') }}" class="new-message">New Message</a></li>
									<li ><a href="{{ url('/all_posts') }}" class="all_posts">All Posts</a></li>
								</ul>
					    </div>
						<div class="clear"></div> 
					</div>
				</div>					
				@yield("content")
			@endif
		@endif	
	</div>

@include('footer')

