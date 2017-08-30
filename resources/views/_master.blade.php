<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield ('title', 'Kokaiweb')</title>
	<meta charset="utf-8">
	<link href="{{URL::asset('/css/Bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{URL::asset('/css/style.css')}}" type="text/css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
	<script src="{{URL::asset('/css/Bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body>
     <div class="container-fluid" id="homepage">
  	
  		<div class="row" id="logo">
  			<div class= "col-xs-12 col-md-5"></div>
  			<div class= "col-xs-12 col-md-2">
  				<a href='/' ><img class="img-responsive" src= "{{URL::asset('/images/Logo5.jpg')}}" alt="Kokaiweb Logo"/></a>
  			</div>	
  			<div class= "col-xs-12 col-md-6"></div>
  		</div>
	</div>	

	<div class="navbar navbar-default" role="navigation" id="navigation">
	        <div class="navbar-header">
    		     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        			<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          	</div>
        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav">
					<li><a href="/aboutus">Nosotros </a></li>
					<li><a href='/servicios'>Servicios</a></li>
            		<li><a href='/portafolio'>Portafolio</a></li>
            		<li><a href='/contacto'>Contacto</a></li>
				</ul>
			</div>
			<hr/> <!--	White line -->
     </div>
    	@yield('content')
 

    <div class="navbar navbar-fixed-bottom" id="footer">
    	@yield('footer') <!--Adding footer-->
    </div>

</body>
