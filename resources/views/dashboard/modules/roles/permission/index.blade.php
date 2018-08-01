@extends('layouts.dashboard')
@section('title', 'Permisos')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Permisos</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Home</a>
         </li>
         <li class="active">
            <a href="{{ route('permissions.create') }}">Crear Permisos</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Permisos Disponible</h5>
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
                        <th>Rol</th>
                        <th>Slug</th>
                        <th>Descripción</th>
                        <th colspan="3">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->slug }}</td>
                            <td>
                              @if(!$permission->description == '')
                                {{ str_limit($permission->description, 50) }}
                              @else
                                Sin descripción
                              @endif
                            </td>
                            @can('assign.show')
                            <td width="10px">
                                <a href="{{ route('permissions.assign') }}" class="btn btn-sm btn-default">
                                    Asigar
                                </a>
                            </td>
                            @endcan
                            @can('permissions.show')
                            <td width="10px">
                                <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-sm btn-success">
                                    Ver
                                </a>
                            </td>
                            @endcan
                            @can('permissions.edit')
                            <td width="10px">
                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            @endcan
                            @can('permissions.destroy')
                            <td width="10px">
                                {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {!! Form::close() !!}
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
               </table>
               {{ $permissions->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection