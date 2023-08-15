<html lang="en">
<head><!--head start here-->

	<title>CCD | Login</title><!--page title goes here-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="jquery, css3, html5, bootstrap, jtable, select2, ajax, laravel" />
    <meta name="description" content="CCD" />
    <meta name="developer" content="CCDS Team" />

    <link rel="shortcut icon" href="{{ asset('images/logos/ccd2.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/my-style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/template/css/style.css') }}"  />	
	<link rel="stylesheet" type="text/css" href="{{ asset('/template/css/swipebox.css') }}"  />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery-ui-1.10.3.custom.css') }}"  />

    <script type="text/javascript" src="{{ asset('/js/jquery-2.1.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-ui-1.10.3.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/dropdown.js') }}"></script>

    <script type="text/javascript">
        $(function() 
        {
    		$('.dropdown-toggle').dropdown();
        	$('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
       	});
    </script>

</head><!--/head end here-->

<body>  <!--body start here-->
	<div class="ccd-admin-container">
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
				                        <a href="#"  data-toggle="tooltip" title="notifications">
				                            <span class="glyphicon glyphicon-bell"><span class="badge">3</span></span>
				                        </a>
				                    </li>                    
				                    <li class="message">
				                        <a href="#" data-toggle="tooltip" title="Messages">
				                            <span class="glyphicon glyphicon-envelope"><span class="badge">2</span></span>
				                        </a>
				                    </li>
									<li class="dropdown li-one">
										<a href="#" class="dropdown-toggle a-one" data-toggle="dropdown">
											<img src="{{ asset('/images/male_default.jpg') }}" class="img-circle" alt="User Image">
				        					<span>Admin<span class="caret"></span></span>
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
				                					<a href="#" class="btn btn-default">
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
							<li class="active"><a href="#" class="ccd-page">Open Account</a></li>
							<li ><a href="#" class="info-ccd">New Post</a></li>							
							<li ><a href="#" class="contact-ccd">New Message</a></li>
							<li ><a href="#" class="about-ccd">Update Customer House</a></li>
							<li ><a href="#" class="feedback-ccd">Reset Password</a></li>
						</ul>
			    </div>
				<div class="clear"></div> 
			</div>
		</div>
		@yield("content")
	</div>
@include('../footer')