@extends('layouts.web')
@section('title', $propierty[0]['title'])
@section('meta')
<meta name="title" content="{{ $propierty[0]['title'] }}">
<meta property="og:type" content="website">
@if(count($propierty[0]['photos']) == 0)
  <meta property="og:image" content="{{ url_img_web('default-thumbnail.jpg', 'static') }}">
@else
  <meta property="og:image" content="{{ url_img_propierty($propierty[0]['photos'][0]['img']) }}">
@endif
<meta property="og:locale" content="es_ES">
<meta property="og:locale:alternate" content="en_EN">
@endsection
@section('content')
<!--list-->
<div class="row">
   <section class="container tm-home-section-1" id="more">
      <!-- slider -->
      <div class="flexslider flexslider-about effect2">
         <ul class="slides">
            <li>
               <div class="container col-md-6">
                  <div id="propierty-carousel" class="carousel slide" data-ride="carousel">
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner" role="listbox">
                      @if(count($propierty[0]['photos']) == 0)
                            <div class="item active">
                             <img src="{{ url_img_web('default-thumbnail.jpg', 'static')}}" class="img-responsive">
                          </div>
                      @else
                        @foreach($propierty[0]['photos'] as $item)
                          <div class="item {{ $loop->first ? 'active' : '' }}">
                             <img src="{{ url_img_propierty($item->img) }}" alt="img_propierty_{{ $item->id }}" class="img-responsive">
                          </div>
                        @endforeach
                      @endif
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#propierty-carousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#propierty-carousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
                 <div class="row flexslider-about">
                    <div class="containerinformation col-md-6">
                      <h2 class="slider-title">
                        {{ $propierty[0]['title'] }}
                      </h2>
                       <h3 class="slider-subtitle">
                          Precio: {{ number_format($propierty[0]['real_estate_price'], 2) }} $US
                       </h3>
                        <p class="slider-description">
                          <strong>Descripción:</strong> {{ $propierty[0]['property_description'] }}
                        </p>
                       {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#propiertys-data-modal">
                            Leer más
                       </button> --}}
                    </div>
                 </div>
            </li>
         </ul>
      </div>
   </section>
</div>
<div class="include-modal">
   {{-- @include('web.modals.modal') --}}
</div>
@endsection