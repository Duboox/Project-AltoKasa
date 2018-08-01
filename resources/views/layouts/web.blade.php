<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="url" content="{{ url('/') }}">
    <!-- Meta OG -->
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- url website -->
    <meta name="url-website" content="{{ url('/') }}">
    <title>@yield('title', config('app.name'))</title>
    {{ css_plugin('font-awesome.min.css') }}
    {{ css_plugin('bootstrap.min.css') }}
    {{ css_plugin('bootstrap-datetimepicker.min.css') }}
    {{ css_plugin('flexslider.css') }}
    {{ css_plugin('contact-buttons.css') }}
    {{ css_plugin('template.css') }}
    {{ style('styles.css') }}
    {{ style('scrollbar.css') }}
    {{ favicon('favicon.ico') }}
  </head>
  <body class="tm-gray-bg">
    <!-- Header -->
    <div class="tm-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 tm-site-name-container">
                    <a href="{{ url('/') }}"> 
                        <img id="imagelogo" src="{{ url_img_web('logo.jpeg') }}">
                    </a> 
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11">
                    <div class="mobile-menu-icon">
                      <i class="fa fa-bars"></i>
                    </div>
                    <nav class="tm-nav">
                        <ul>
                            <li><a href="{{ url('/') }}" {{ setActiveWeb('/') }}>Inicio</a></li>
                            <li><a href="{{ route('query', 'sale') }}" {{ setActiveWeb('sale') }}>VENTA </a></li>
                            <li><a href="{{ route('query', 'rental') }}" {{ setActiveWeb('rental') }}>ALQUILER </a></li>
                            <li><a href="{{ route('query', 'anticretico') }}" {{ setActiveWeb('anticretico') }}>ANTICRETICO</a></li>
                            <li><a href="{{ route('contact', 'null') }}" {{ setActiveWeb('contact') }}>Contacto</a></li>
                            <li><a href="{{ route('information') }}" {{ setActiveWeb('information') }}>Información</a></li>
                        </ul>
                    </nav>      
                </div>              
            </div>
        </div>      
    </div>
    <!-- Banner -->
    <!-- <section class="tm-banner">
         Flexslider 
        <div class="flexslider flexslider-banner">
          <ul class="slides">
            @foreach($gallery as $photo)
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">
                        <span class="tm-color-text">
                            {{ $photo->title }}
                        </span> 
                    </h1>
                    <p class="tm-banner-subtitle">
                        {{ str_limit($photo->brief_description, 20) }}
                    </p>
                </div>
                <img src="{{ url_carousel_home($photo->filename) }}" alt="image_carousel_home_{{ $photo->id}}"> 
            </li>
            @endforeach
          </ul>
        </div>  
    </section> -->
    
    <div class="tm-content">
    @section('content')
    @show
    </div>

    <footer class="tm-black-bg">
        <div class="container">
            <div class="row">
                <p class="tm-copyright-text">
                    {{ copyright_web() }} | Develop by <a href="http://www.consultora-ani.com" target="_parent">Consultora Ani</a>
                </p>
            </div>
        </div>      
    </footer>

    
    @section('scripts')
        <!-- jQuery -->
        {{ js_plugin('jquery-1.11.2.min.js') }}
         <!-- moment.js -->
        {{ js_plugin('moment.js') }}
         <!-- bootstrap js -->
        {{ js_plugin('bootstrap.min.js') }}
        <!-- Template Script -->
        {{ js_plugin('jquery.flexslider-min.js') }}
        <!-- {{ js_plugin('jquery.contact-buttons.js') }} -->
        {{ js_plugin_dashboard('validate/jquery.validate.min.js') }}
        {{ js_plugin('template.js') }}
        {{ script('ajax.js') }}
        @yield('script')
        <script>
            $('.flexslider').flexslider({
                controlNav: false
            });

            $.contactButtons({
              effect  : 'slide-on-scroll',
              buttons : {
                @foreach($socials as $social)
                    '{{ $social->name }}':  { class: '{{ $social->name }}',  use: {{ true_false($social->use, 1) }}, icon: '{{ $social->name }}', link: '{{ $social->link }}', extras: '{{ true_false($social->extras, 0) }}', title: '{{ $social->title }}' },
                @endforeach
              }
            });
        </script>
    @show
 </body>
 </html>