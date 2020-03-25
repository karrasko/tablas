<div class="form-group {{ $errors->has('Fichaje') ? 'has-error' : ''}}">
    <label for="Fichaje" class="control-label">{{ 'Fichaje' }}</label>
    <input class="form-control" name="Fichaje" type="text" id="Fichaje" value="{{ isset($tarea->Fichaje) ? $tarea->Fichaje : ''}}" >
    {!! $errors->first('Fichaje', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($tarea->Nombre) ? $tarea->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Mensaje') ? 'has-error' : ''}}">
    <label for="Mensaje" class="control-label">{{ 'Mensaje' }}</label>
    <textarea class="form-control" rows="5" name="Mensaje" type="textarea" id="Mensaje" >{{ isset($tarea->Mensaje) ? $tarea->Mensaje : ''}}</textarea>
    {!! $errors->first('Mensaje', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($tarea->Correo) ? $tarea->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
