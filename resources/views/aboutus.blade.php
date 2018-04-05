@extends('layouts._master')

  @section ('content')
<div id="section1">
 <div class="container-fluid">
 	<div class="row">
  			<div class= "col-xs-12 col-md-6" id="abouttext">
  				<img class="img-responsive" id="imgabout" src= "{{URL::asset('/images/Logoblanco.jpg')}}" alt="About us"/></a>
  			</div>
  			<div class= "col-xs-12 col-md-6" id="abouttext1">
  				<p class="font120"> Somos un grupo de desarrolladores buscando resolver diferentes necesidades tecnológicas (TI)</p>

				<p class="font120"> Nuestro objetivo es ayudar a pequeñas y medianas empresas a crecer su negocio por medio de:</p>

				<ul>
					
					<P class="font120"> <b>I</b>ncrementar el rendimiento de la empresa al implementar las soluciones.</P>
					<P class="font120"> <b>D</b>esarrollar sitios web o aplicaciones donde los usuarios se sientan cómodos y más productivos utilizando las herramientas.</P>
					<P class="font120"> <b>E</b>ntender las necesidades reales de nuestros clientes y no solo las necesidades técnicas.</P>
					<P class="font120"> <b>A</b>provechar al máximo los sistemas e información de los negocios de nuestros clientes (Big Data).</P>
					<P class="font120"> <b>S</b>oluciones adaptadas a sus necesidades.</P>
					
				</ul>

				<!--p> Para resolver las necesidades creamos soluciones especializadas y hacemos análisis de datos. </p>

				<p> El perfil de las fundadoras de KOKAI WEB </p>

				<ul>
					<li> Ana Paula Olavarrieta es Ingeniera en Negocios certificada por la Universidad de Harvard en Desarrollo Web. </li>
					<li> Gabriela Olavarrieta es Ingeniera en Computación con una Maestría en Inteligencia Artificial para la toma de decisiones </li>

				<p>Por favor háganos saber como podemos ayudar a crecer su negocio y resolver cualquier requerimiento técnico. </p-->
  			</div>

  	</div>
 </div>
</div>	

@stop