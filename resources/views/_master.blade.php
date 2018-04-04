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
     <div class="container-fluid black">
  	
  		<div class="row" id="logo">
  			<div class= "col-xs-12 col-md-5"></div>
  			<div class= "col-xs-12 col-md-2" id="divlogo1">
  				<a href='/' ><img class="imgLogo" src= "{{URL::asset('/images/kokaiweb_logo.png')}}" alt="Kokaiweb Logo"/></a>
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
					<li id="menu"><a href="/aboutus">Nosotros </a></li>
          <li id="menu"><a href='/servicios'>Servicios</a></li>
          <!--li class="dropdown" id="menu">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Portafolio <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li id="submenu"><a href="/land">Land</a></li>
                <li id="submenu"><a href="/mipar">Mipar</a></li>
                <li id="submenu"><a href="/pakete">Paketealivianes</a></li>
                <li id="submenu"><a href="/contravel">Contravel</a></li>
            </ul>
          </li-->
          <li id="menu"><a href='/clientes'>Clientes</a></li>
          <li id="menu"><a href='/contacto'>Contacto</a></li>
				</ul>
			</div>
			<hr/> <!--	White line -->
     </div>
    	@yield('content')
 

    <div class="navbar navbar-fixed-bottom" id="footer">
    	@yield('footer') <!--Adding footer-->
    </div>

</body>
