<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{Config::get('constants.SITE_NAME')}} | {{$title}}</title>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Custom Styles -->
	<link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" />

</head>
<body>
  <!-- Fixed navbar -->
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="<?php echo asset('img/logo.png'); ?>" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/about">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/reach">Reach</a></li>
                <li><a href="/engage">Engage</a></li>
              </ul>
            </li>
      		<li><a href="/blog">Blog</a></li>	
      		<li><a href="/careers">Careers</a></li>	
      		<li><a href="/contact">Contact</a></li>	
          </ul>
          <ul class="nav navbar-nav navbar-right">
	          <div class="social">
		        <a href="#">
		          <img src="<?php echo asset('img/32-facebook.png'); ?>" alt="">
	          	</a>
	          </div>
	          <div class="social">
		        <a href="#">
	          		<img src="<?php echo asset('img/32-twitter.png'); ?>" alt="">
	          	</a>
	          </div>
	          <div class="social">
		        <a href="#">
	         	 <img src="<?php echo asset('img/32-youtube.png'); ?>" alt="">
	         	</a>
	         </div>
          </ul>
        </div>
      </div>
    </nav> 

	@yield('content')

	<footer>
		<div class="container">
			<div class="row">
			 	<div class="col-lg-6">
			 	<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><h3>Contact Us</h3>
					<p>info@astura.co.uk</p>
					<p>+44 (0) 1633 302 069</p>
					<p>Alacrity House,<br />
					Newport,<br />
					NP20 1HG,<br />
					United Kingdom</p>
				</div>
				<div class="col-lg-4"></div>
			 	<div class="col-lg-2">
			 		<img src="<?php echo asset('img/rackspace.png'); ?>" alt="">
			 		<img src="<?php echo asset('img/alacrity.png'); ?>" alt="">
			 		<img src="<?php echo asset('img/Wesley-Clover-Foundation-Logo.png'); ?>" alt="">
			 	</div>
			</div>
		</div>
	</footer>
	<div class="row bottom-bar">
		<div class="container">
			<div class="col-lg-6">
				<p>&copy; 2015 {{Config::get('constants.SITE_NAME')}}</p>
			</div>
			<div class="col-lg-6 text-right">
				<p>Company No: 123456789</p>
			</div>
		</div>
	</div>
	<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!-- Loop video -->

</body>
</html>