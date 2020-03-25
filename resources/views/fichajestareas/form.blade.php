<div class="form-group {{ $errors->has('id_fichatarea') ? 'has-error' : ''}}">
    <label for="id_fichatarea" class="control-label">{{ 'Id Fichatarea' }}</label>
    <input class="form-control" name="id_fichatarea" type="number" id="id_fichatarea" value="{{ isset($fichajestarea->id_fichatarea) ? $fichajestarea->id_fichatarea : ''}}" >
    {!! $errors->first('id_fichatarea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_proyecto') ? 'has-error' : ''}}">
    <label for="id_proyecto" class="control-label">{{ 'Id Proyecto' }}</label>
    <input class="form-control" name="id_proyecto" type="text" id="id_proyecto" value="{{ isset($fichajestarea->id_proyecto) ? $fichajestarea->id_proyecto : ''}}" >
    {!! $errors->first('id_proyecto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_tarea') ? 'has-error' : ''}}">
    <label for="id_tarea" class="control-label">{{ 'Id Tarea' }}</label>
    <input class="form-control" name="id_tarea" type="text" id="id_tarea" value="{{ isset($fichajestarea->id_tarea) ? $fichajestarea->id_tarea : ''}}" >
    {!! $errors->first('id_tarea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_asistencia') ? 'has-error' : ''}}">
    <label for="id_asistencia" class="control-label">{{ 'Id Asistencia' }}</label>
    <input class="form-control" name="id_asistencia" type="text" id="id_asistencia" value="{{ isset($fichajestarea->id_asistencia) ? $fichajestarea->id_asistencia : ''}}" >
    {!! $errors->first('id_asistencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fech_ini') ? 'has-error' : ''}}">
    <label for="fech_ini" class="control-label">{{ 'Fech Ini' }}</label>
    <input class="form-control" name="fech_ini" type="text" id="fech_ini" value="{{ isset($fichajestarea->fech_ini) ? $fichajestarea->fech_ini : ''}}" >
    {!! $errors->first('fech_ini', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fech_fin') ? 'has-error' : ''}}">
    <label for="fech_fin" class="control-label">{{ 'Fech Fin' }}</label>
    <input class="form-control" name="fech_fin" type="text" id="fech_fin" value="{{ isset($fichajestarea->fech_fin) ? $fichajestarea->fech_fin : ''}}" >
    {!! $errors->first('fech_fin', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
