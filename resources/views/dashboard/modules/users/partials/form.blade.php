<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
	        <label>
	        {{ Form::checkbox('roles[]', $role->id, null) }}
	        {{ $role->name }}
	        <em>({{ $role->description == '' ? 'Sin description' : $role->description}})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
    @if ($errors->has('roles'))
      <span class="error-validate">
          <strong>{{ $errors->first('roles') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>