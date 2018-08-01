@extends('layouts.dashboard')
@section('title', 'Lista de Clientes')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Clientes</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('client.create') }}">Crear Cliente</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registrados: {{ count($clients) }}</h5>
               <div class="ibox-tools">
                  <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="ibox-content table-responsive">
              @include('alert.alerts')
              <div class="row m-b-sm m-t-sm">
                <div class="col-md-11">
                    {{ Form::open(['route' => 'client.index', 'method' => 'GET']) }}
                    <div class="form-group">
                        <div class="input-group inline-block">
                            <input type="number" name="identy_license" placeholder="Carnet de Identidad" class="form-control"> 
                        </div>
                        <div class="input-group inline-block">
                            <input type="submit" class="submit form-control btn-info" value="Buscar"> 
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
               <table class="table responsive">
                  <thead>
                     <tr>
                        <th>#ID</th>
                        <th>Responsable</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carnet Identidad</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Estatus</th>
                        <th>Tipo</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody> 
                    @foreach($clients as $client)
                        <tr>
                          <td>{{ $client->id }}</td>
                          <td>{{ $client->client->name }}</td>
                          <td>{{ $client->first_name }}</td>
                          <td>{{ $client->last_name }}</td>
                          <td>{{ $client->identy_license }}</td>
                          <td>{{ $client->email }}</td>
                          <td>{{ $client->phone }}</td>
                          <td>{{ $client->addres }}</td>
                          <td>{{ status_client ($client->status) }}</td>
                          <td>{{ type_client ($client->type) }}</td>
                          
                            <td width="10px">
                                <a href= " {{ route('client.edit', $client->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['client.destroy', $client->id], 'method' => 'DELETE']) }}
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
               {{ $clients->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection