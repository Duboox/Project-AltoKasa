<div class="form-group">
  {{ Form::label('slug', 'Usuario') }}
  <select name="user_id"  class="form-control">
    @foreach($a_users as $user)
      <option value="">Seleccione</option>
      <option value="{{ $user->id }}">{{ $user->name }}</option>
    @endforeach
  </select>
  @if ($errors->has('slug'))
      <span class="error-validate">
          <strong>{{ $errors->first('slug') }}</strong>
      </span>
  @endif
</div>

<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($permissions as $permission)
      <li>
          <label>
            {{ Form::checkbox('permissions[]', $permission->id, null) }}
            {{ $permission->name }} <em>({{ $permission->description }})</em>
          </label>
      </li>
      @endforeach
    </ul>
</div>

<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>