@extends('layouts.dashboard')
@section('title', "Asignar Permisos")
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Asignar Permiso</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Home</a>
         </li>
         <li class="active">
            <a href="{{ route('permissions.index') }}">Permisos</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Asignar Permisos</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    {{ Form::open(['route' => 'permissions.s.assign']) }}
                        @include('dashboard.modules.roles.permission.partials.assign')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection