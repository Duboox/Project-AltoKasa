@extends('layouts.web')
@section('title', 'Nosotros')
@section('content')
<style>
  .margin_container {
    margin: 10px 0px 10px 0px;
  }
</style>
<div id="home">
    <section class="container tm-home-section-1 margin_container" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider flexslider-about effect2">
			  <ul class="slides">
			    <li>
			      <img src= {{ url_img_web('about_us.jpg','static') }} alt="image_about_us" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">QUIENES SOMOS</h2>
			      	<h3 class="slider-subtitle"> {{ config('app.name') }} </h3>
			      	<p class="slider-description">Somos una empresa que está formada por un equipo profesional Joven y Dinámico con un 
						objetivo común: Satisfacer las demandas de nuestros Clientes.

						Nuestro equipo de trabajo tiene por objeto: la Promoción, refacción, remodelación Venta y Construcción
 						de toda clase de Bienes Inmuebles, ofrecemos a nuestros clientes la experiencia acumulada y adaptada a los cambios
 						de la vida moderna.</p>

			      </div>			      
			    </li>
			    <li>
			      <img src= {{ url_img_web ('mission.jpg','static') }} alt="image_mission" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">MISION</h2>
			      	<h3 class="slider-subtitle">En {{ config('app.name') }} </h3>
			      	<p class="slider-description">En INICIA nuestra Misión es “Ofrecer Servicios Inmobiliarios de Excelencia por medio de un equipo de profesionales en la cual la calidad de atención al cliente, la experiencia en el área y la asesoría técnica sean factores esenciales para brindar con
 					eficiencia nuestros servicios.</p>

			      </div>			      
			    </li>
			    <li>
			      <img src= {{url_img_web ('view.jpg','static') }} alt="image_view" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">VISION</h2>
			      	<h3 class="slider-subtitle">En {{ config('app.name') }}</h3>
			      	<p class="slider-description">Trabajamos diariamente con una Visión en mente, Ubicar a INICIA como una empresa líder en el mercado de bienes raíces, la cual sea reconocida por la capacidad de desarrollo de proyectos de inversión, comercialización, buscando constantemente oportunidades de negocio con las cuales tanto propietario – cliente – empresa squeden satisfechos con el trabajo realizado como empresa competitiva.</p>

			      </div>			      
			    </li>
			    <li>
			      <img src= {{url_img_web ('values.png','static')}} alt="image_values" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">VALORES </h2>
			      	<h3 class="slider-subtitle">Nuestros valores se enfoncan en los siguientes - Para lograr cumplir objetivos comunes.</h3>
			      	
					<ul>
						<h4> Honestidad </h4>
						<h5>Hablar con la verdad con cliente y compañeros, para lograr una congruencia entre el pensar, decir y el actuar.</h5>

						<h4> Responsabilidad </h4>
						<h5>La idea de respuesta, ofreciendo una actitud adecuada a los compromisos que hicimos con el cliente.</h5>

						<h4>Confianza</h4>
						<h5>Reconocemos y creemos en el buen actuar por parte de los clientes y equipo de trabajo.</h5>

						<h4>Transparencia</h4>
						<h5>Actuando coherentemente con información abierta y oportuna.</h5>

						<h4> Innovación </h4>
						<h5>Utilizando la tecnología que permita el desarrollo de nuestra empresa</h5>
					</ul>

			      </div>			      
			    </li>
			  </ul>
			</div>
		</div>
	</section>
 @endsection


