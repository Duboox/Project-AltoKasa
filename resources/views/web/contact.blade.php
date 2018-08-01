@extends('layouts.web')
@section('title', 'Contacto')
@section('content')
<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contactanos</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row" id="contact-form">
				<!-- contact form -->
				<form action="#" method="post" class="tm-contact-form" id="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.4953829853516!2d-66.17494478447914!3d-17.387998288078286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDIzJzE2LjgiUyA2NsKwMTAnMjEuOSJX!5e0!3m2!1ses-419!2sve!4v1531184849384" width="545" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">

						@if($propiertys_data)
						<div class="form-group">
							<input type="text" id="ref_pro" name="ref_pro" class="form-control" placeholder="Referencia Propiedad" readonly value="{{ $propiertys_data->title }}">
						</div>
						@endif

						<div class="form-group">
							<input type="text" id="name" name="name" class="form-control" placeholder="Nombre" />
						</div>
						<div class="form-group">
							<input type="email" id="email" name="email" class="form-control" placeholder="Correo electronico" />
						</div>
						<div class="form-group">
							<input type="text" id="subject" name="subject" class="form-control" placeholder="Asunto" />
						</div>
						<div class="form-group">
							<textarea id="message" name="message" class="form-control" rows="6" placeholder="Mensaje"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit" id="tm-submit-btn">Enviar</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>	
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        top.location.href="#contact-form";
  		return false;
    });
</script>
@endsection
