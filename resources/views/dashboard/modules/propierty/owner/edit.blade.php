@extends('layouts.dashboard')
@section('title', 'Registrar Propietario')
@section('styles')
    @parent
    {{ css_plugin_dashboard('steps/jquery.steps.css') }}
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Registrar Propietario</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('owner.index') }}">
              <strong>Ver Propietarios</strong>
            </a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeIn">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registro</h5>
            </div>
            <div class="ibox-content">
              <div class="ibox-content">
                <h2>Requeridos (*)</h2>
                @include('dashboard.modules.propierty.owner.partials.model')
              </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
    <!-- Mainly scripts -->
    {{ js_dashboard('jquery-2.1.1.js') }}
    {{ js_dashboard('bootstrap.min.js') }}
    {{ js_plugin_dashboard('metisMenu/jquery.metisMenu.js') }}
    {{ js_plugin_dashboard('slimscroll/jquery.slimscroll.min.js') }}
    <!-- Custom and plugin javascript -->
    {{ js_dashboard('template.js') }}
    {{ js_plugin_dashboard('pace/pace.min.js') }}
    <!-- Steps -->
    {{ js_plugin_dashboard('staps/jquery.steps.min.js') }}
    <!-- Jquery Validate -->
    {{ js_plugin_dashboard('validate/jquery.validate.min.js') }}
    <!-- wizard.js -->
    {{ js_dashboard('wizard.js') }}
@endsection