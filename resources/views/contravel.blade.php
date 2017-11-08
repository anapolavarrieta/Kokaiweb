@extends('_master')

  @section ('content')
    <div id="section1">
 		<div class="container-fluid">
 			<div class="row">
 				<div class= "col-xs-12 col-md-7" id="abouttext">
  					<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Contravel.jpg')}}" alt="Mipar"/>
  				</div>
  				<div class= "col-xs-12 col-md-5" id="abouttext">
  					<div class="espacio"></div>
  					<div class="proyectotext">
  						<p class="url">Contravel </a></p>
  						<p class="text"> Sistema de automatización</p>
  						<ul class="text">
  							<li>Automatización de reportes semanales de comisiones </li>
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