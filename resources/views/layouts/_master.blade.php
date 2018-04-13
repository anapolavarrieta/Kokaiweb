<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		@yield ('title', 'Kokaiweb')
	</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='{{URL::asset('/css/generico.css')}}' type='text/css' rel='stylesheet'>
	<link href='{{URL::asset('/css/style.css')}}' type='text/css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
	<script src="{{URL::asset('/css/Bootstrap/js/bootstrap.min.js')}}"></script>

	@stack('head')
</head>
<body>
    <header class="black">
        <div class="container center">
            <div class="row" id="logo">
                <br>
			</div>
			<div class="row" id="logo">
	  			<div class= "col-xs-12 col-md-5">
				</div>
	  			<div class= "col-xs-12 col-md-2" id="divlogo1">
	  				<a href='/' ><img class="imgLogo" src= "{{URL::asset('/images/kokaiweb_logo.png')}}" alt="Kokaiweb Logo"/></a>
				</div>
	  			<div class= "col-xs-12 col-md-6">
				</div>
			</div>
			<div class="row" id="logo">
                <br>
			</div>
        </div>
    </header>

    @if(session('message'))
        <!--div class='alert'>{{ session('message') }}</div-->
    @endif
    <div class="container center">
        @if (Auth::check())
            @include('layouts.menu')
        @endif
		@include('layouts.menu')
        @include('layouts.message')
    </div>

    <div class= "black">
        <br>
    </div>

	<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

	<!--footer>
		<div class="navbar navbar-fixed-bottom" id="footer">
	    	@yield('footer') <!--Adding footer- ->
	    </div>
	</footer-->

	@stack('body')

</body>
</html>