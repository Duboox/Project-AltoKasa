@foreach($propiertys_data as $propierty)
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
    <div class="tm-home-box-2 f-size-12 margin-top-25"> 
        @if(count($propierty->photos) == 0)
            <a href="{{ route('read.more', $propierty->slug) }}">
                <img src="{{ url_img_web('default-thumbnail.jpg', 'static')}}" class="img-responsive standard-image">
            </a>
          @else
            @foreach($propierty->photos as $photo) 
                @if($photo->primary == 1)
                   <a href="{{ route('read.more', $propierty->slug) }}">
                        <img src="{{ url_img_propierty($photo->img) }}" alt="imagen primary" class="img-responsive standard-image">
                    </a>
                @endif                   
            @endforeach
          @endif
        <h3>{{ $propierty->type->name.' En '.$propierty->city->name }}</h3>
        <p class="tm-date hs-center owner-price">
            Precio de la Propiedad {{ number_format($propierty->real_estate_price, 2)  }} $US
        </p>
        <div class="tm-home-box-2-container">
            <a href="{{ route('contact', $propierty->id) }}" class="tm-home-box-2-link">
                <i class="fa fa-envelope tm-home-box-2-icon border-left"></i>
            </a>
            <a href="{{ route('read.more', $propierty->slug) }}" class="tm-home-box-2-link">
                <span class="tm-home-box-2-description">{{ $propierty->type->name }}</span>
            </a>
            <a href="{{ route('contact', $propierty->id) }}" class="tm-home-box-2-link">
                <i class="fa fa-envelope tm-home-box-2-icon border-left"></i>
            </a>
        </div>
    </div>
</div>
@endforeach