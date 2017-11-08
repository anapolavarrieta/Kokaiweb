@extends('_master')

  @section ('content')
    <div id="section1">
 		<div class="container-fluid">
 			<div class="row">
 				<div class= "col-xs-12 col-md-6" id="abouttext">
  					<a href="http://paketealivianes.org/" target="_blank"><img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Pakete.PNG')}}" alt="Paketealivianes"/></a>
  				</div>
  				<div class= "col-xs-12 col-md-6" id="abouttext">
  					<div class="espacio"></div>
  					<div class="proyectotext">
  						<p class="url"><a href="http://paketealivianes.org/" target="_blank">www.paketealivianes.org </a></p>
  						<p class="text"> Página web realizada para servicio social</p>
  						<ul class="text">
  							<li>Diseño de página web </li>
                <li>Geolocalización para check-in </li> 
                <li>Creación de reportes</li>
  							<li>Configuración servidor y base de datos</li>
  							<li>Mantenimiento</li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  @stop