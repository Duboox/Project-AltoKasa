@extends('layouts.dashboard')
@section('title', "Editar Usuario: {$user->name}")
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Edición de Usuario: #{{ $user->id }}</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Home</a>
         </li>
         <li class="active">
            <a href="{{ route('users.index') }}">Usuarios</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Editar Usuario: <small>{{ $user->name }}</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) }} 
                        @include('dashboard.modules.users.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection