{{ Form::model($tags, ['route'=> ['tags.update', $tags->id], 'method' => 'PUT', 'id' => 'form', 'class' => 'wizard-big']) }}
    <h1>Etiqueta</h1>
    <fieldset>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Destino de Etiqueta (*)</label>
                    <select name="id_category" class="form-control required">
                        <option value="{{ $tags->id_category }}" selected>{{ is_category($tags->id_category) }}</option>
                        <option value="1">Calidades</option>
                        <option value="2">Tipo de Entorno</option>
                        <option value="3">Tipo de Piso</option>
                    </select>
                    @if ($errors->has('id_category'))
                        <span class="error-validate">
                            <strong>{{ $errors->first('id_category') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Etiqueta (*)</label>
                    <input name="name" type="text" class="form-control required" value="{{ $tags->name }}">
                    @if ($errors->has('name'))
                        <span class="error-validate">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div style="margin-top: 20px">
                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
{{ Form::close() }}