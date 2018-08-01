@extends('layouts.web')
@section('title', $propiertys_data[0]['title'])
@section('content')
<style>
  .margin_container {
    margin: 10px 0px 10px 0px;
  }
</style>
<section class="container tm-home-section-1 margin_container" id="more">
   <div class="row">
      <!-- slider -->
      <div class="flexslider flexslider-about effect2">
         <ul class="slides">
            @foreach($propiertys_data as $data)
              <li>
               <div class="container col-md-6">
                  <div id="propierty_{{ $data->id }}" class="carousel slide" data-ride="carousel">
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner" role="listbox">
                        @if(count($data->photos) == 0)
                            <div class="item active">
                             <img src="{{ url_img_web('default-thumbnail.jpg', 'static')}}" class="img-responsive">
                          </div>
                         @else
                           @foreach($data->photos as $item)
                              <div class="item {{ $loop->first ? 'active' : '' }}">
                                 <img src="{{ url_img_propierty($item->img) }}" alt="img_propierty_{{ $item->id }}" class="img-responsive">
                              </div>
                           @endforeach
                         @endif
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#propierty_{{ $data->id }}" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#propierty_{{ $data->id }}" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="row flexslider-about">
                  <div class="containerinformation col-md-6">
                     <h2 class="slider-title">
                      {{ $data->title }}
                     </h2>
                     <h3 class="slider-subtitle">
                        Precio de la Propiedad: {{ number_format($data->real_estate_price, 2) }} $US
                     </h3>
                     <p class="slider-description">
                        {{ $data->property_description }}</p>
                     {{--  <a href="#" class="btn btn-primary read_more_propierty" data-id="{{ $data->id }}">
                        Leer más
                      </a> --}}
                  </div>
               </div>
            </li>

            @endforeach
         </ul>
      </div>
   </div>
</section>
<div class="include-modal">
   @include('web.modals.read_more_propierty')
</div>
@endsection