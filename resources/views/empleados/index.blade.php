
@extends('layouts.app')

@section('content')

<div class="container">


    {{-- <div class="row justify-content-center"> --}}


@if (Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
    {{Session ::get ('Mensaje')}}
</div>



@endif


<a href="{{ url ('empleados/create') }}" class="btn btn-success" >Agregar Empleado</a>
<br/>
<br/>


<table class="table table-light table-hover">


     <thead class="thead-light">
         <tr>
            <th>#</th>
            <th>Nombre</th>
           {{--  <th>Apellidos</th> --}}
            <th>email</th>
            <th>role</th>
            <th>Password</th>
            <th>Acciones</th>
         </tr>
    </thead>
    
    <tbody>
        @foreach($users as $user)
        <tr>
           <td>{{$loop->iteration}}</td>
            {{--  <td></td> --}}
           <td>{{$user->name}} {{$user->surname}}</td>
         
           <td>{{$user->email}}</td>
         
           <td>{{$user->role}}</td>
           <td>{{$user->password}}</td>
           <td>
               
            <a class="btn btn-warning" href="{{ url('empleados/'.$user->id.'/edit') }}">
            Editar 
            </a>

            
           <form method="post" action =" {{ url('empleados/'.$user->id) }}" style="display:inline">

            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick= "return confirm('¿Borrar?');">Borrar</button>
       
           </form>



           </td>
         </tr>
         @endforeach
     </tbody>


    </table>

{{$users->links()}}

</div>


@endsection