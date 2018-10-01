@extends('layouts.dashboard')
@section('title', 'Registrar Propiedad')
@section('styles')
@parent
{{ css_plugin_dashboard('steps/jquery.steps.css') }}
{{ css_plugin_dashboard('chosen/chosen.css') }}
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Registrar Nueva Propiedad</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li>
            <a href="{{ route('propierty.index') }}">
            <strong>Propiedades</strong>
            </a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeIn">
<div class="row">
   <div class="col-lg-12" id="scroll">
      <div class="ibox float-e-margins">
         {{ Form::open(['route'=> 'propierty.store', 'method' => 'POST', 'id' => 'propierty-form', 'class' => 'wizard-big']) }}
         <div class="ibox-content">
            <div class="ibox-content">
               @include('dashboard.modules.propierty.partials.form')
            </div>
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>
<script type="text/javascript">

</script>

@include('dashboard.modules.propierty.partials.modal.search')
@include('dashboard.modules.propierty.partials.modal.add')
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
<!-- Jquery chosen -->
{{ js_plugin_dashboard('chosen/chosen.jquery.js') }}
<!-- calcule.js -->
{{ js_dashboard('wizard.js') }}
<!-- select -->
{{ js_dashboard('select.js') }}
{{ script('ajax.js') }}
<script type="text/javascript">
   $(document).ready(function () {

       $('.chosen-select').chosen({ width: '100%' });
       
       var commission_value = $('#commission_value');
       var real_estate_price = $('#real_estate_price');
       var calculation  = $('#calculation');
   
         $(commission_value).change(function(){
             // Percentage
             var percentage = commission_value.val();
             // Price
             var price = real_estate_price.val();

            console.log(percentage, price); 
             
             // calcule
             var result = (price * percentage)/100;
             // var complete = parseInt(price)+parseInt(result);
             
             //result
             calculation.val(result);
         });
   });
</script>
@endsection