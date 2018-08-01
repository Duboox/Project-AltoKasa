@extends('layouts.dashboard')
@section('title', 'Lista de Tipo de Operación')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Tipo de Operación</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('type-operation.create') }}">Crear Tipo de Operación</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registrados: {{ count($type_operations) }}</h5>
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
                        <th>Estado</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($type_operations as $item)
                        <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ trueFalseForHumans($item->status) }}</td>
                            <td width="10px">
                                <a href="{{ route('type-operation.edit', $item->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['type-operation.destroy', $item->id], 'method' => 'DELETE']) }}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
               </table>
               {{ $type_operations->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection