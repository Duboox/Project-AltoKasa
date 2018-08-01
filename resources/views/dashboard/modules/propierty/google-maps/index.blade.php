@extends('layouts.dashboard')
@section('title', 'Google Maps')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Google Maps</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li href="{{ route('propierty.index') }}" >
                <strong>Propiedades</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInUp">
    <div class="ibox">
        <div class="ibox-title">
            <h5>Busqueda en Google Maps</h5>
        </div>
        <div class="ibox-content">
            <table class="table responsive">
                  <thead>
                     <tr>
                        <th>#ID Propiedad</th>
                        <th>Direccion</th>
                        <th>Opción</th>
                        <th colspan="10">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($propierty as $data)
                        <tr>
                         <td class="project-status">
                            <span class="label label-primary">#{{ $data->id }}</span>
                        </td>
                        <td>
                           {{ $data->property_address }}
                        </td>
                            <td width="10px">
                                <a href="{{ route('google.maps.find', $data->id) }}" class="btn btn-sm btn-info">
                                    Visualizar
                                </a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
               </table>
               {{ $propierty->render() }}
        </div>
    </div>
</div>
@endsection