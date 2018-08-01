<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- URL dashboard -->
    <meta name="url-dashboard" content="{{ url('dashboard') }}">
    <!-- URL website -->
    <meta name="url-website" content="{{ url('/') }}">
    <title>@yield('title')</title>
    @section('styles')
    {{ Html::style('tmpl_dashboard/css/bootstrap.min.css') }}
    {{ Html::style('tmpl_dashboard/font-awesome/css/font-awesome.css') }}
    <!-- Toastr style -->
    {{ Html::style('tmpl_dashboard/css/plugins/toastr/toastr.min.css') }}
    <!-- Gritter -->
    {{ Html::style('tmpl_dashboard/js/plugins/gritter/jquery.gritter.css') }}
    {{ Html::style('tmpl_dashboard/css/animate.css') }}
    {{ Html::style('tmpl_dashboard/css/template.css') }}
    @show
    {{ Html::style('tmpl_dashboard/css/styles.css') }}
    {{ Html::favicon('favicon.ico') }}
    @section('css')
    @show
</head>
    @section('body')
        <body>
    @show
    @section('wrapper')
    <div id="wrapper">
        @section('nav')
            @include('dashboard.nav')
        @show
        <div id="page-wrapper" class="gray-bg dashbard-1">
          <div class="row border-bottom">
           <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
              <div class="navbar-header">
                 <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                    <i class="fa fa-bars"></i> 
                 </a>
              </div>
              <ul class="nav navbar-top-links navbar-right">
                 <li>
                    <span class="m-r-sm text-muted welcome-message">
                      Bienvenido a {{ config('app.name') }} +Admin
                    </span>
                 </li>
                 @role('head')
                 <li class="new-message">
                    <a class="count-info" href="#">
                       <i class="fa fa-envelope"></i>  
                       <span class="label label-warning">{{ null }}</span>
                    </a>
                 </li>
                <li class="new-users">
                    <a class="count-info" href="{{ route('users.index') }}">
                       <i class="fa fa-users"></i>  
                       <span class="label label-info">{{ $users }}</span>
                    </a>
                 </li>
                <li class="new-testimonies">
                    <a class="count-info" href="#return->testimonial">
                       <i class="fa fa-star"></i>  
                       <span class="label label-success">{{ null }}</span>
                    </a>
                </li>
                @endrole
                 <li>
                    <a href="{{ route('logout') }}" class="logout">
                       <i class="fa fa-sign-out"></i> Cerrar sesión
                    </a>
                 </li>
                 <li>
                    <a href="{{ url('/') }}" class="right-sidebar-toggle" rel="pop-up">
                        <i class="fa fa-home"></i>
                    </a>
                 </li>
              </ul>
           </nav>
        </div>
            @yield('content')
          <div class="footer">
              <div class="pull-right">
                  Develop by 
                  <strong>
                    <a rel="nofollow" href="http://www.nonlyweb.com.ve" target="_parent">Nonlyweb</a>
                  </strong>
              </div>
              <div>
                  {{ copyright() }} 
              </div>
          </div>
        </div>
      </div>
    @show
    @section('scripts')
    <!-- Mainly scripts -->
    {{ Html::script('tmpl_dashboard/js/jquery-2.1.1.js') }}
    {{ Html::script('tmpl_dashboard/js/bootstrap.min.js') }}
    {{ Html::script('tmpl_dashboard/js/plugins/metisMenu/jquery.metisMenu.js') }}
    {{ Html::script('tmpl_dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js') }}
    <!-- Flot -->
    {{ Html::script('tmpl_dashboard/js/plugins/flot/jquery.flot.js') }}
    {{ Html::script('tmpl_dashboard/js/plugins/flot/jquery.flot.tooltip.min.js') }}
    {{ Html::script('tmpl_dashboard/js/plugins/flot/jquery.flot.spline.js') }}
    {{ Html::script('tmpl_dashboard/js/plugins/flot/jquery.flot.resize.js') }}
    {{ Html::script('tmpl_dashboard/js/plugins/flot/jquery.flot.pie.js') }}
    <!-- Peity -->
    {{ Html::script('tmpl_dashboard/js/plugins/peity/jquery.peity.min.js') }}
    {{ Html::script('tmpl_dashboard/js/demo/peity-demo.js') }}
    <!-- Custom and plugin javascript -->
    {{ Html::script('tmpl_dashboard/js/template.js') }}
    {{ Html::script('tmpl_dashboard/js/plugins/pace/pace.min.js') }}
    <!-- jQuery UI -->
    {{ Html::script('tmpl_dashboard/js/plugins/jquery-ui/jquery-ui.min.js') }}
    <!-- GITTER -->
    {{ Html::script('tmpl_dashboard/js/plugins/gritter/jquery.gritter.min.js') }}
    <!-- Sparkline -->
    {{ Html::script('tmpl_dashboard/js/plugins/sparkline/jquery.sparkline.min.js') }}
    <!-- Sparkline demo data  -->
    {{ Html::script('tmpl_dashboard/js/demo/sparkline-demo.js') }}
    <!-- ChartJS-->
    {{ Html::script('tmpl_dashboard/js/plugins/chartJs/Chart.min.js') }}
    <!-- Toastr -->
    {{ Html::script('tmpl_dashboard/js/plugins/toastr/toastr.min.js') }}
    <!-- Nonlyweb -->
    {{ Html::script('tmpl_dashboard/js/inicia.js') }}
    @show
    @yield('script')
</body>
</html>
