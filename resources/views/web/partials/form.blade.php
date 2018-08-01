<style>
	.select_type_op {
     list-style-type:none;
     padding:0;
}

.select_type_op li {
     float:left;
    width:85px;
    height:40px;
	position:relative;
	text-align: center;
}

.select_type_op label, .select_type_op input {
    display:block;
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
}

.select_type_op input[type="radio"] {
    opacity:0.01;
    z-index:100;
}

.select_type_op input[type="radio"]:checked + label,
.Checked + label {
	background-color: rgb(0, 20, 105);
}

.select_type_op label {
	 padding:5px;
	 padding-top: 7px;
	 background-color: #0120a7;
     cursor:pointer;
	z-index:90;
	color: white;
}

.select_type_op label:hover {
	background-color: rgb(0, 20, 105);
}
</style>
<div class="form-inline">
                    <div class="col-xs-10">
					<div class="form-group">
	<ul class="select_type_op">
	@foreach($data[2] as $item)
		<li>
		<input type="radio" id="{{ $item->id }}" value="{{ $item->id }}" name="type_operation"/>
        <label for="{{ $item->id }}">{{ $item->name }}</label>
		</li>
     @endforeach
</ul>
        @if ($errors->has("type_property"))
          <span class="error-validate">
              <strong>{{ $errors->first("type_property") }}</strong>
          </span>
        @endif
    </div>
    <div class="form-group">
        <select name="type_property" class="form-control">
            <option value="">TIPO DE PROPIEDAD</option>
                @foreach($data[0] as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
        </select> 
        @if ($errors->has("type_property"))
          <span class="error-validate">
              <strong>{{ $errors->first("type_property") }}</strong>
          </span>
        @endif
    </div>
    <div class="form-group">
        <select name="min_price" class="form-control">
            <option value="">PRECIO MINIMO</option>
            <option value="0">0</option>
            <option value="2500">2,500</option>
            <option value="5000">5,000</option>
            <option value="10000">10,000</option>
            <option value="25000">25,000</option>
            <option value="50000">50,000</option>
            <option value="75000">75,000</option>
            <option value="100000">100,000</option>
            <option value="125000">125,000</option>
            <option value="150000">150,000</option>
            <option value="200000">200,000</option>
            <option value="250000">250,000</option>
            <option value="300000">300,000</option>
            <option value="350000">350,000</option>
            <option value="400000">400,000</option>
            <option value="450000">450,000</option>
            <option value="500000">500,000</option>
            <option value="550000">550,000</option>
            <option value="600000">600,000</option>
            <option value="750000">750,000</option>
            <option value="1000000">1,000,000</option>
            <option value="2000000">2,000,000</option>
            <option value="3000000">3,000,000</option>
            <option value="4000000">4,000,000</option>
            <option value="5000000">5,000,000</option>
        </select> 
        @if ($errors->has("min_price"))
          <span class="error-validate">
              <strong>{{ $errors->first("min_price") }}</strong>
          </span>
        @endif
    </div>
    <div class="form-group">
        <select name="max_price" class="form-control">
            <option value="">PRECIO MAXIMO</option>
            <option value="2500">2,500</option>
            <option value="5000">5,000</option>
            <option value="10000">10,000</option>
            <option value="25000">25,000</option>
            <option value="50000">50,000</option>
            <option value="75000">75,000</option>
            <option value="100000">100,000</option>
            <option value="125000">125,000</option>
            <option value="150000">150,000</option>
            <option value="200000">200,000</option>
            <option value="250000">250,000</option>
            <option value="300000">300,000</option>
            <option value="350000">350,000</option>
            <option value="400000">400,000</option>
            <option value="450000">450,000</option>
            <option value="500000">500,000</option>
            <option value="550000">550,000</option>
            <option value="600000">600,000</option>
            <option value="750000">750,000</option>
            <option value="1000000">1,000,000</option>
            <option value="2000000">2,000,000</option>
            <option value="3000000">3,000,000</option>
            <option value="4000000">4,000,000</option>
            <option value="9999999">5,000,000 +</option>
        </select> 
        @if ($errors->has("max_price"))
          <span class="error-validate">
              <strong>{{ $errors->first("max_price") }}</strong>
          </span>
        @endif
    </div>
    <div class="form-group">
    <input id="searchTextField" name="city_name" class="form-control" type="text" size="15" placeholder="Introduce una ciudad" autocomplete="on">
        @if ($errors->has("city"))
          <span class="error-validate">
              <strong>{{ $errors->first("city") }}</strong>
          </span>
        @endif
    </div>
                    </div>

                    <div class="col-xs-2">
                    <div class="form-group tm-blue-gradient-bg text-center">
   <button type="submit" class="tm-btn">BUSCAR</button>
</div>  
                    </div>
</div>
    
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