@extends('_master')

  @section ('content')
    <div id="section1">
 		<div class="container-fluid">
 			<div class="row">
 				<div class= "col-xs-12 col-md-7" id="abouttext">
  					<a href="https://www.mipar.mx/" target="_blank"><img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/mipar1.png')}}" alt="Mipar"/></a>
  				</div>
  				<div class= "col-xs-12 col-md-5" id="abouttext">
  					<div class="espacio"></div>
  					<div class="proyectotext">
  						<p class="url"><a href="https://www.mipar.mx/" target="_blank">www.mipar.mx </a></p>
  						<p class="text"> Tienda en línea de zapatería</p>
  						<ul class="text">
  							<li>Adaptación de diseño (Map Arts) </li>
                <li>Tienda en linea </li>
  							<li>Configuración servidor</li>
                <li>Configuración de inventario</li>
  							<li>Mantenimiento</li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  @stop