@extends('layouts.web')
@section('title', 'Nosotros')
@section('content')
<style>
  .margin_container {
    margin: 10px 0px 10px 0px;
  }
</style>
<div id="home">
<section class="tm-white-bg section-padding-bottom bg-ffffff9e">
        <div class="container">
            <div class="row">
                <div class="tm-section-header section-margin-top">
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <h2 class="tm-section-title">
                         <span id="propierty">propiedades</span>
                            
                        </h2>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>  
                </div>
                <div class="row" id="paginate">
                    @include('web.paginate')
                </div>
                <div class="col-lg-12">
                    <div class="ajax-load text-center">
                        <img src="{{ url_img_web('loader.gif') }}" alt="">
                    </div>
                </div>
            </div>      
        </div>
    </section>
 @endsection


