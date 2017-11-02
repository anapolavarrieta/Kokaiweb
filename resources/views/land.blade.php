@extends('_master')

  @section ('content')
    <div id="section1">
 		<div class="container-fluid">
 			<div class="row">
 				<div class= "col-xs-12 col-md-8" id="abouttext">
  					<a href="http://www.landproyectos.com.mx/" target="_blank"><img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Land.png')}}" alt="About us"/></a>
  				</div>
  				<div class= "col-xs-12 col-md-4" id="abouttext">
  					<div class="espacio"></div>
  					<div class="proyectotext">
  						<p class="url"><a href="http://www.landproyectos.com.mx/" target="_blank">www.landproyectos.com.mx </a></p>
  						<p class="text"> Página web realizada para empresa de proyectos inmobiliarios</p>
  						<ul class="text">
  							<li>Adaptación de diseño </li>
  							<li>Configuración servidor</li>
  							<li>Mantenimiento</li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  @stop