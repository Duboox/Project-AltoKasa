@extends('layouts.web')
@section('content')
<style>
    .search_position {
    position: absolute;
    width: 90%;
    height: 200px;
    z-index: 999;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    .search_container {
        position: absolute;
    width: 95%;
    height: 85%;
    background-color: #1515157d;
    z-index: 999;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    .form_container{
    position: absolute;
    width: 90%;
    height: 70%;
    z-index: 999;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    .form-group{
        margin: 10px;
    }

    .buttons_slide_container{
        position: absolute;
    width: 100%;
    height: auto;
    z-index: 999;
    top: 12%;
    text-align: center;
    }

    .buttons_slide_centerd {
        margin: 0px 50px 0px 50px;
        font-size: 14px;
    }
    .container_no_margin{
        padding-right: 0px;
        padding-left: 0px;
    }
    .f-size-12{
        width: 350px;
        height: 350px;
        max-width: 350px !important; 
    }
    .image_card{
        width: 100% !important;
        height: 100% !important;
        object-fit: cover;
    }
    .text_card {
        position: absolute;
        font-size: 1.5em;
        left: 7%;
    }
</style>

<div id="home">
   <!-- gray bg --> 
    <section class="container container_no_margin tm-home-section-1" id="more">
    <div class="search_position">
            <div class="search_container">
                <div class="form_container">
                    <div class="row">
                    {{ Form::open(['route' => 'search', 'method' => 'GET', 'class' => 'search-form']) }}
                                    @include('web.partials.form')
                                {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons_slide_container">
        <button class="tm-btn buttons_slide_centerd" onclick="window.location.href='{{ route("bienes") }}' {{ setActiveWeb('bienes') }}">BIENES RAICES</button>
        <button class="tm-btn buttons_slide_centerd" onclick="window.location.href='{{ route("inversiones") }}' {{ setActiveWeb('inversiones') }}">INVERSIONES</button>
        <button class="tm-btn buttons_slide_centerd" onclick="window.location.href='{{ route("constructora") }}' {{ setActiveWeb('constructora') }}">CONSTRUCTORA</button>
        </div>
    <div class="flexslider">
			  <ul class="slides">
			    <li>
			      <img src={{url_img_web ('alto_casa.png','static') }} alt="image_about_us" />
			    </li>
			    <li>
			      <img src={{url_img_web ('slider_1.png','static') }}  alt="image_view" /> 		      
			    </li>
			    <li>
			      <img src={{url_img_web ('slider_2.png','static') }}  alt="image_values" />
			    </li>
			  </ul>
			</div>
    </section> 
    
    <section class="tm-white-bg section-padding-bottom bg-ffffff9e">
        <div class="container">
            <div class="row">
                <div class="row" id="paginate">
                
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                        <div class="tm-home-box-2 f-size-12 margin-top-25"> 
                            <a href="#">
                            <div class="text_card">
                                <p>Franquicia</p>
                                <p>Conoce nuestra franquicia</p>
                            </div>
                                <img src="{{ url_img_web('franquicia.jpg', 'static')}}" class="img-responsive image_card">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                        <div class="tm-home-box-2 f-size-12 margin-top-25"> 
                            <a href="#">
                            <div class="text_card">
                                <p>Franquicia</p>
                                <p>Conoce nuestra franquicia</p>
                            </div>
                                <img src="{{ url_img_web('agentes.jpg', 'static')}}" class="img-responsive image_card">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                        <div class="tm-home-box-2 f-size-12 margin-top-25"> 
                            <a href="#">
                            <div class="text_card">
                                <p>Franquicia</p>
                                <p>Conoce nuestra franquicia</p>
                            </div>
                                <img src="{{ url_img_web('instagram.jpg', 'static')}}" class="img-responsive image_card">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                        <div class="tm-home-box-2 f-size-12 margin-top-25"> 
                            <a href="#">
                            <div class="text_card">
                                <p>Franquicia</p>
                                <p>Conoce nuestra franquicia</p>
                            </div>
                                <img src="{{ url_img_web('franquicia.jpg', 'static')}}" class="img-responsive image_card">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                        <div class="tm-home-box-2 f-size-12 margin-top-25"> 
                            <a href="#">
                            <div class="text_card">
                                <p>Franquicia</p>
                                <p>Conoce nuestra franquicia</p>
                            </div>
                                <img src="{{ url_img_web('agentes.jpg', 'static')}}" class="img-responsive image_card">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                        <div class="tm-home-box-2 f-size-12 margin-top-25"> 
                            <a href="#">
                            <div class="text_card">
                                <p>Franquicia</p>
                                <p>Conoce nuestra franquicia</p>
                            </div>
                                <img src="{{ url_img_web('instagram.jpg', 'static')}}" class="img-responsive image_card">
                            </a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12">
                    <div class="ajax-load text-center">
                        <img src="{{ url_img_web('loader.gif') }}" alt="">
                    </div>
                </div>
            </div>      
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNkFKMWacwNBkCaS3P3o82V5cyP0shRIE&libraries=places&language=en"></script>
<script type="text/javascript">
   function initialize() {
    var options = {
  types: ['(cities)'],
  componentRestrictions: {country: "bo"}
 };

      var input = document.getElementById('searchTextField');
      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection

