@extends('_master')

  @section ('content')
<div id="section1">
 <div class="container-fluid">
 	<div class="row">
  			<div class= "col-xs-12 col-md-6" id="abouttext">
  				<img class="img-responsive" id="imgabout" src= "{{URL::asset('/images/Logoblanco.jpg')}}" alt="About us"/></a>
  			</div>
  			<div class= "col-xs-12 col-md-6" id="abouttext">
  				<p> Somos un grupo de desarrolladores buscando resolver diferentes necesidades tecnológicas (TI)</p>

				<p> Nuestro objetivo es ayudar a pequeñas y medianas empresas a crecer su negocio por medio de:</p>

				<ul>
					<li> <b>A</b>segurar que la solución se adapta a sus necesidades. </li>
					<li> <b>C</b>orroborar que los clientes toman el mejor provecho de las soluciones.</li>
					<li> <b>C</b>ertificar que mientras mayor sea la funcionalidad del sitio, mayor sea el rendimiento de la empresa. </li>
					<li> <b>E</b>ntender no solo las necesidades técnicas de nuestros clientes sino sus necesidades reales. </li>
					<li> <b>D</b>esarrollar su sitio web o aplicación, permitiendo que los usuarios se sientan cómodos y más productivos utilizando las herramientas.</li>
					<li> <b>A</b>yudar a nuestros clientes a interpretar la información (Big Data). </li>
					
				</ul>

				<p> Para resolver las necesidades creamos soluciones especializadas y hacemos análisis de datos. </p>

				<!--p> El perfil de las fundadoras de KOKAI WEB </p>

				<ul>
					<li> Ana Paula Olavarrieta es Ingeniera en Negocios certificada por la Universidad de Harvard en Desarrollo Web. </li>
					<li> Gabriela Olavarrieta es Ingeniera en Computación con una Maestría en Inteligencia Artificial para la toma de decisiones </li>

				<p>Por favor háganos saber como podemos ayudar a crecer su negocio y resolver cualquier requerimiento técnico. </p-->
  			</div>

  	</div>
 </div>
</div>	

@stop