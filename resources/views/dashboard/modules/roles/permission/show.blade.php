@extends('layouts.dashboard')
@section('title', "Permisos: {$permission->name}")
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Permiso # {{ $permission->id }}</h2>
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
<div class="wrapper wrapper-content  animated fadeInRight article">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="text-center article-title">
                        <span class="text-muted">
                            <i class="fa fa-clock-o"></i> 
                            Creado: {{ $permission->created_at->diffForHumans() }}
                        </span>
                        <div class="text-center">
                            <h1>
                                Rol: {{ $permission->name }}
                            </h1>
                            <h2>
                                Slug: {{ $permission->slug }}
                            </h2>
                        </div>
                        <hr>
                        @if($permission->description == '')
                            <p>Sin descripción</p>
                        @else
                            {{ $permission->description }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection