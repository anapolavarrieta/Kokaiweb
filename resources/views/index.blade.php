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
     <div class="container-fluid" id="home">
     	<div id="logohome">
     		<a href='/' ><img class="img-responsive" src= "{{URL::asset('/images/Logo5.jpg')}}" alt="Kokaiweb Logo"/></a>
     	</div>
   
  
	<div class="navbar navbar-default" role="navigation" id="navigationhome">
		
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
            		<li><a href='/land'>Portafolio</a></li>
            		<li><a href='/contacto'>Contacto</a></li>
				</ul>
			</div>
	
     </div>

</div>
       
	<footer>
		<p id="footergroup">GRUPO KOKAI</p>

		<p id="footerinfo"> 
			+52 (55) 5603 1165 <br>
			AV. PERIFERICO SUR NO. 7642 <br>
			COL. VILLACUEMANCO <br>
			MEXICO, DF <br>
	</footer>

	


	


 
