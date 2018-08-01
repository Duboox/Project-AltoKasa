{{ Form::model($id, ['route' => ['perfil.update', $id->id], 'method' => 'PUT', 'files' => true]) }} 
<div class="ibox-content profile-content">
   <div class="form-group">
      {{ Form::label('avatar', 'Avatar:') }}
      {{ Form::file('avatar', ['class' => 'form-control', 'id' => 'avatar']) }}
      {{ $id->avatar == 'default.png' ? null : Form::hidden('old_avatar', $id->avatar) }}
      @if ($errors->has('avatar'))
          <span class="error-validate">
              <strong>{{ $errors->first('avatar') }}</strong>
          </span>
      @endif
   </div>
   <hr>
   <div class="form-group">
      {{ Form::label('name', 'Nombre:') }}
      {{ Form::text('name', $id->name, ['class' => 'form-control', 'id' => 'name']) }}
      @if ($errors->has('name'))
          <span class="error-validate">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif
   </div>
   <hr>
   <div class="form-group">
      {{ Form::label('name', 'Correo Eléctronico:') }}
      {{ Form::email('email',  $id->email, ['class' => 'form-control', 'id' => 'email']) }}
      @if ($errors->has('email'))
          <span class="error-validate">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
   </div>
   <hr>
   <div class="form-group">
      {{ Form::label('phone', 'Teléfono:') }}
      {{ Form::number('phone',  $id->phone, ['class' => 'form-control', 'id' => 'phone']) }}
      @if ($errors->has('phone'))
          <span class="error-validate">
              <strong>{{ $errors->first('phone') }}</strong>
          </span>
      @endif
   </div>
   <div class="user-button">
      <div class="row">
         <div class="col-md-12">
            <button type="submit" class="btn btn-success btn-sm btn-block">
               <i class="fa fa-pencil"></i> Actualizar
            </button>
         </div>
      </div>
   </div>
</div>
{{ Form::close() }}