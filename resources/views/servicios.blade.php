@extends('_master')
 @section ('content')

 <div id="section2">
 	<div class="container-fluid">
 		<div class="row" id="serviciostext">
 			<div class= "col-xs-12 col-md-12" id="serviciostext">
 				<div class="row">
 					<div class= "col-xs-12 col-md-0"></div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Desarrollo Web</h2>
 						<p> Cada una de las páginas desarrolladas se adecuan a las necesidades de los negocio, siempre teniendo en cuenta la visibilidad en los diferentes dispositivos (celulares, tablets, computadoras, etc...).</p>
 						<p> Nos acoplamos a cualquier CMS (Wordpress, Joomla, Drupal) y utilizamos los frameworks Laravel (PHP) y Django (PYTHON).</p>
 					</div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Diseño Web</h2>
 						<p> Diseñamos páginas web para todo tipo de sitios, dandole un toque único y original a cada página. </p>
 					</div>
 				</div>
 			</div>

 			<div class= "col-xs-12 col-md-12" >
 				<div class="row">
 					<div class= "col-xs-12 col-md-6"></div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" style= "visibility:hidden;" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 					</div>
 					<div class= "col-xs-12 col-md-0"></div>
 				</div>
 			</div>

 			<div class= "col-xs-12 col-md-12" id="serviciostext">
 				<div class="row">
 					<div class= "col-xs-12 col-md-0"></div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Automatización de procesos</h2>
 						<p> Reducimos el tiempo que utilizan las empresas en procesos que, normalmente, se hacen manuales. La mejora y la automatización de procesos ayuda a los negocios a tener precisión en los mismos y disminuir errores.</p>
 					</div>
 					<div class= "col-xs-12 col-md-6"></div>
 				</div>
 			</div>

 			<div class= "col-xs-12 col-md-12" id="serviciostext">
 				<div class="row">
 					<div class= "col-xs-12 col-md-6"></div>
 					<div class= "col-xs-12 col-md-2">
 						<img class="img-responsive" id="imgproyecto" src= "{{URL::asset('/images/Abeja.jpg')}}" alt="About us"/>
 					</div>
 					<div class= "col-xs-12 col-md-4">
 						<h2 class="servicioh2">Tienda en línea</h2>
 						<p> Diseñamos y desarrollamos tiendas en línea, de acuerdo a las necesidades de venta.</p>
 					</div>
 					<div class= "col-xs-12 col-md-0"></div>
 				</div>
 			</div>
 		
</div>


 	</div>
 </div>
 @stop