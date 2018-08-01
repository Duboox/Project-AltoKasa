@extends('layouts.dashboard')
@section('title', 'Galeria')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Galeria</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('gallery.create') }}">Crear Galeria</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Imágenes Registrada: {{ count($photos) }}</h5>
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
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{ $photo->id }}</td>
                            <td>{{ $photo->title }}</td>
                            <td>{{ $photo->brief_description }}</td>
                            <td>
                              <a href="{{ url_carousel_home($photo->filename) }}" target="_blank">
                                <img src="{{ url_carousel_home($photo->filename) }}" width="50" height="50">
                              </a>
                            </td>
                            <td>
                            <td width="10px">
                                <a href="{{ route('gallery.edit', $photo->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['gallery.destroy', $photo->id], 'method' => 'DELETE']) }}
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
               {{ $photos->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection