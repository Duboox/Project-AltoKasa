@extends('layouts.dashboard')
@section('title', 'Lista de Propiedades')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Propiedades</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li>
                <strong>Propiedades</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInUp">
    <div class="ibox">
        <div class="ibox-title">
            <h5>Lista de Propiedades Registradas</h5>
            <div class="ibox-tools">
                <a href="{{ route('propierty.create') }}" class="btn btn-primary btn-xs">Crear Propiedad</a>
            </div>
        </div>
        <div class="ibox-content">
        @include('alert.alerts')
            <div class="row m-b-sm m-t-sm">
                <div class="col-md-11">
                    {{ Form::open(['route' => 'propierty.index', 'method' => 'GET']) }}
                    <div class="form-group">
                        <div class="input-group inline-block">
                            <select name="type_property" class="form-control">
                                <option value="">Tipo de Propiedad</option>
                                @foreach($data[0] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group inline-block">
                            <select name="city" class="form-control" id="city">
                                <option value="">Ciudad</option>
                                @foreach($data[1] as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="input-group inline-block">
                            <select name="area" class="form-control" id="area">
                               <option value="" id="option">Área</option>
                            </select>
                        </div>
                        <div class="input-group inline-block">
                            <input type="submit" class="submit form-control btn-info" value="Buscar"> 
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="project-list">
                <table class="table table-hover">
                    <tbody>
                    @foreach($propiertys_data as $propierty)
                    <tr>
                        <td class="project-status">
                            <span class="label label-primary">#{{ $propierty->id }}</span>
                        </td>
                        <td class="project-title">
                            {{ $propierty->title }}
                            <br>
                            <small>
                                Creado: <strong> {{ $propierty->created_at->diffForHumans() }}</strong>
                            </small>
                        </td>
                        <td class="project-people">
                        	@foreach($propierty->photos as $photos)
	                            <a href="{{ url_img_propierty($photos->img) }}">
	                            	<img src="{{ url_img_propierty($photos->img) }}" alt="url_img_propierty_{{ $propierty->id }}" class="img-circle-propierty">
	                            </a>
							@endforeach
                        </td>
                        <td class="project-actions">
                            <a href="{{ route('propierty.show', $propierty->id) }}" title="Ver Propiedad" class="btn btn-sm btn-primary">
                            	<i class="fa fa-folder"></i>  
                            </a>
                            <a href="{{ route('propierty.edit', $propierty->id) }}" title="Editar Propiedad" class="btn btn-sm btn-info">
                            	<i class="fa fa-pencil"></i>   
                            </a>
                            <a href="{{ route('photos.show', $propierty->id) }}" title="Ver Fotos" class="btn btn-sm btn-success">
                                <i class="fa fa-file-image-o"></i>   
                            </a>
                             <a href="{{ route('photo.create', $propierty->id) }}" title="Agregar Fotos" class="btn btn-sm btn-success">
                                <i class="fa fa-file-image-o"></i>   
                            </a>
                            <a href="{{ route('google.maps.find', $propierty->id) }}" title="Ver en Propiedad en Google Maps" class="btn btn-sm btn-dc9808-cfff">
                                <i class="fa fa-map-marker"></i>   
                            </a>
                            {{ Form::open(['route' => ['propierty.destroy', $propierty->id], 'method' => 'DELETE', 'class' => 'btn-propierty-d']) }}
                            <button class="btn btn-sm btn-danger" title="Eliminar Propiedad" onclick="return confirm('Desea eliminar está Propiedad?')">
                                <i class="fa fa-trash"></i>  
                            </button>
                            {{ Form::close() }}
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
@endsection
@section('script')
    @parent
    <!-- select -->
    {{ js_dashboard('select.js') }}
    {{ script('ajax.js') }}
@endsection
