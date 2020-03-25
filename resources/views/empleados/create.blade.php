

@extends('layouts.app')

@section('content')

<div class="container">

  @if(count($errors)>0)
   <div class="alert alert-danger" role="alert">
       <ul>
            @foreach($errors->all() as $error)

                <li> {{ $error }} </li>

             @endforeach
       </ul>
     </div>
  @endif

<form action="{{url('/empleados')}}"class="form-horizontal" 
method='post' enctype="multipart/form-data">
    {{ csrf_field() }}
    
    @include('empleados.form',['Modo'=>'crear'])


{{--     <label for="name">{{ 'name'}} </label>
<input type= "text" name="name" id="name" value="">
<br/>

<label for="surname">{{ 'surname'}} </label>
<input type= "text" name="surname" id="surname" value="">
<br/>

<label for="email">{{ 'email'}} </label>
<input type= "email" name="email" id="email" value="">
<br/>

<label for="password">{{ 'password'}} </label>
<input type= "text" name="password" id="password" value="">
<br/>


 <input type ="submit" value="Agregar">

 <a href="{{url ('empleados')}}">Regresar</a> --}}
 

</form >

</div>

@endsection

{{-- 
<label for="Foto">{{ 'Foto'}} </label>
<input type= "file" name="nombre" id="Foto" value="">
<br/>
 --}}