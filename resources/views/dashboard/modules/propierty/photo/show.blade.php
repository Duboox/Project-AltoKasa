@extends('layouts.dashboard')
@section('title', 'Lista de Fotos')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Fotos</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('photos.index') }}">Fotos</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Asociadas: {{ count($data) }}</h5>
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
                        <th>Imagen</th>
                        <th>Estado</th>
                        <th>Primaria</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                        <tr>
                          <td>{{ $item->id }}</td>
                          <td>
                            <a href="{{ url_img_propierty($item->img) }}">
                              <img src="{{ url_img_propierty($item->img) }}" alt="" width="50" height="50">
                            </a>
                          </td>
                          <td>{{ hideShowForHumans($item->status) }}</td>
                          <td>{{ trueFalseForHumans($item->primary) }}</td>
                            <td width="10px">
                                <a href="{{ route('photos.edit', $item->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['photos.destroy', $item->id], 'method' => 'DELETE']) }}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection