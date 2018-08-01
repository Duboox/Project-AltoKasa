@extends('layouts.dashboard')
@section('title', 'Lista de Ciudades')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Ciudades</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('city.create') }}">Crear Ciudad</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registrados: {{ count($citys) }}</h5>
               <div class="ibox-tools">
                  <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="ibox-content table-responsive">
              @include('alert.alerts')
               <table class="table responsive">
                  <thead>
                     <tr>
                        <th>#ID</th>
                        <th>Nombre</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($citys as $city)
                        <tr>
                          <td>{{ $city->id }}</td>
                          <td>{{ $city->name }}</td>
                            <td width="10px">
                                <a href="{{ route('city.edit', $city->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['city.destroy', $city->id], 'method' => 'DELETE']) }}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {{ Form::close() }}
                            </td>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
               </table>
               {{ $citys->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection