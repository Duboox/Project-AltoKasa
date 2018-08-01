@extends('layouts.dashboard')
@section('title', 'Buscador de Google Maps')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Buscador de Google Maps</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Home</a>
         </li>
        <li>
            <a href="{{ route('propierty.index') }}">Propiedades</a>
        </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight article">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="text-center article-title">
          						<div class="form-group">
          							<h2>Buscador</h2>
          							<input type="text" name="search_map" id="search_map" class="form-control" value="{{ $propierty->property_address }}">
          						</div>
                    	<div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    @parent
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNkFKMWacwNBkCaS3P3o82V5cyP0shRIE&libraries=places&callback=initMap">
    </script>
    <!-- google maps -->
    <script type="text/javascript">
    	function initMap() {
	        var uluru = { lat: -25.363, lng: 131.044 };
	        
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 4,
	          center: uluru
	        });
	        
	        var marker = new google.maps.Marker({
		        position: uluru,
		        map: map
	        });

	        var searchBox = new google.maps.places.SearchBox(document.getElementById('search_map'));

	        google.maps.event.addListener(searchBox, 'places_changed', function(){

		        var places = searchBox.getPlaces();
		        var bounds = new google.maps.LatLngBounds();
		        var i, place;

		        for (i = 0; place = places[i]; i++) {
		        	bounds.extend(place.geometry.location);
		        	marker.setPosition(place.geometry.location);
		        }

		        map.fitBounds(bounds);
		        map.setZoom(15);
	        });
      	}
    </script>
    
@endsection


