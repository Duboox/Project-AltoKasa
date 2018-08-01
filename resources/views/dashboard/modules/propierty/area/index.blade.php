@extends('layouts.dashboard')
@section('title', 'Lista de Areas')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Areas</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('area.create') }}">Crear Area</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registrados: {{ count($areas) }}</h5>
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
                        <th>Area</th>
                        <th>Ciudad</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($areas as $area)
                        <tr>
                          <td>{{ $area->id }}</td>
                          <td>{{ $area->name }}</td>
                          <td>{{ $area->city->name }}</td>
                            <td width="10px">
                                <a href="{{ route('area.edit', $area->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['area.destroy', $area->id], 'method' => 'DELETE']) }}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
               </table>
                {{ $areas->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection