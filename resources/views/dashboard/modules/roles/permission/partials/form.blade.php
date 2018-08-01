<div class="form-group">
	{{ Form::label('name', 'Nombre del Permiso') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Ej: Navegar usuarios']) }}
	@if ($errors->has('name'))
      <span class="error-validate">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
	{{ Form::label('slug', 'Permiso') }}
	<select name="slug" id="slug" class="form-control">
		<option value="">Seleccione</option>
		<optgroup label="Usuarios"></optgroup>
			<option value="users.index">Navegar usuarios</option>
			<option value="users.create">Crear usuarios</option>
			<option value="users.show">Ver usuarios</option>
			<option value="users.edit">Editar usuarios</option>
			<option value="users.destroy">Eliminar usuario</option>
		<optgroup label="Roles"></optgroup>
			<option value="roles.index">Navegar Roles</option>
			<option value="roles.create">Crear Roles</option>
			<option value="roles.show">Ver Roles</option>
			<option value="roles.edit">Editar Roles</option>
			<option value="roles.destroy">Eliminar Roles</option>
		<optgroup label="Website"></optgroup>
			<option value="gallery.index">Navegar Galeria</option>
			<option value="gallery.create">Crear Galeria</option>
			<option value="gallery.show">Ver Galeria</option>
			<option value="gallery.edit">Editar Galeria</option>
			<option value="gallery.destroy">Eliminar Galeria</option>
	</select>
	@if ($errors->has('slug'))
      <span class="error-validate">
          <strong>{{ $errors->first('slug') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Lista y navega todos los usuarios del sistema']) }}
	@if ($errors->has('description'))
      <span class="error-validate">
          <strong>{{ $errors->first('description') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>