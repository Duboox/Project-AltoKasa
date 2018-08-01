{{ Form::open(['route'=> 'owner.store', 'method' => 'POST', 'id' => 'form', 'class' => 'wizard-big']) }}
    <h1>Personal</h1>
    <fieldset>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Nombre (*)</label>
                    <input name="first_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Apellido (*)</label>
                    <input  name="last_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Teléfono Principal (*)</label>
                    <input name="phone" type="number" class="form-control required">
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
    <h1>Opcionales</h1>
    <fieldset>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Teléfono Opcional</label>
                    <input name="cell_phone" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Teléfono Trabajo</label>
                    <input name="work_phone" type="number" class="form-control">
                </div>
            </div>
        </div>
    </fieldset>
    <h1>Datos 3</h1>
    <fieldset>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea name="description" class="form-control"></textarea>
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