<html lang="en">
<head><!--head start here-->

	<title>CCD</title><!--page title goes here-->
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
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/css/slider.css') }}"  media="all" />   

    <script type="text/javascript" src="{{ asset('/js/jquery-2.1.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-ui-1.10.3.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ccd.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/template/js/ios-orientationchange-fix.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('/template/js/jquery.swipebox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/template/js/jquery.nivo.slider.js') }}"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
            $(".swipebox").swipebox();
        });
    </script>

    <script type="text/javascript">
        $(function() 
        {
            $('.dropdown-toggle').dropdown();
            $('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
        });
    </script>

</head><!--/head end here-->
