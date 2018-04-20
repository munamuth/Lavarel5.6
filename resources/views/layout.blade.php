<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/bs4/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/owl/carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/owl/carousel/assets/owl.theme.default.min.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <script type="text/javascript" src="{{ url('cssnjs/jquery/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/popper/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/bs4/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/owl/carousel/owl.carousel.min.js') }}"></script>
    </head>
    <body>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">KHMERONEAIR</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Buy</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Rent</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Sell</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Condo</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Borey</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">Plot Land</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Agent</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Other</a>
		      </li>
		    </ul>

		    <form class="">
		      <button class="btn btn-info btn-sm" type="button"><span class="fa fa-sign-in"></span> Login</button>
		      <button class="btn btn-success btn-sm" type="button"><span class="fa fa-user-plus"></span> Register</button>
		    </form>
		  </div>
		</nav>
		<div class="logo" style="padding: 15px;">
			<div class="img-fluid" style="width: 20%">
				<img src="/logo/logo.png" class="img-fluid" width="20%">
			</div>			
			<marquee>
				test
			</marquee>
		</div>
    </body>
</html>