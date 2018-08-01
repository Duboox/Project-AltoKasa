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
            <a href="{{ route('propierty.index') }}">Propiedades</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Propiedades Registradas: {{ count($propiertys_data) }}</h5>
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
                        <th>Total</th>
                        <th>Fotos</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($propiertys_data as $item)
                        <tr>
                          <td>
                            {{ count($item->photos) }}
                          </td>
                          <td>
                            @foreach($item->photos as $photo)
                            <a href="{{ url_img_propierty($photo->img) }}" target="_blank">
                              <img src="{{ url_img_propierty($photo->img) }}" alt="" width="50" height="50">
                            </a>
                            @endforeach
                          </td>
                            <td width="10px">
                                <a href="{{ route('photo.create', $item->id) }}" class="btn btn-sm btn-primary">
                                    Agregar
                                </a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('photos.show', $item->id) }}" class="btn btn-sm btn-info">
                                    Asociadas
                                </a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
               </table>
               {{ $propiertys_data->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection