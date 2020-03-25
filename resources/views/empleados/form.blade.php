
<div clas="form-group">

    <label for="name" class="control-label">{{'Nombre'}} </label>
    <input type= "text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" name="name" id="name"
    
    value="{{ isset ($user -> name)?$user->name:old('name')}}">
 
   {!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}

    

</div>

<div clas="form-group">

     <label for="surname" class="control-label">{{ 'Apellido'}} </label>
    <input type= "text" class="form-control {{$errors->has('surname') ? 'is-invalid':''}}" name="surname" id="surname" 


      value="{{ isset ($user -> surname)?$user->surname:old('surname')}}">

      {!! $errors->first('surname','<div class="invalid-feedback">:message</div>') !!}

</div>

<div clas="form-group">

    <label for="email" class="control-label">{{ 'Correo'}} </label>
    <input type= "email" class="form-control  {{$errors->has('email') ? 'is-invalid':''}} " name="email" id="email"

    value="{{ isset ($user -> email)?$user->email:old('email')}}">

    {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}

</div>
<div clas="form-group">

     <label for="password" class="control-label">{{ 'Password'}} </label>
     <input type= "text" class="form-control {{$errors->has('password') ? 'is-invalid':''}} " name="password" id="password" 


     value="{{ isset ($user -> password)?$user->password:old('password')}}">

     {!! $errors->first('password','<div class="invalid-feedback">:message</div>') !!}

</div>
<br/>

<input type="submit" class= "btn btn-success" 
value="{{ $Modo== 'crear'? 'Agregar empleado':'Modificar empleado' }}"> 
    
<a class="btn btn-primary" href="{{url ('empleados')}}">Regresar</a>   
