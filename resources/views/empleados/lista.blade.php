@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">



<table class="table table-light">
     <thead class="thead-light">
         <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>email</th>
            <th>Password</th>
         </tr>
    </thead>
    
    <tbody>
        @foreach($users as $user)
        <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->surname}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->password}}</td>
           <td>
               
            <a href="{{ url('/empleados/lista/'.$user->id.'/edit') }}">
            Editar 
            </a>
            
           <form method="post" action =" {{ url('empleados/lista/'.$user->id) }}">

            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick= "return confirm('¿Borrar?');">Borrar</button>
       
           </form>


           </td>
         </tr>
         @endforeach
     </tbody>

</table> 

  


      {{-- 

         @section('content')
                <div class="col-xs-12 col-sm-8">
                    <h2>
                        Usuarios
                        <a href="{{ route('user.create') }}" class="btn btn-primary pull-right">Nuevo</a>
                    </h2>
                    <hr>
                  @include('products.partials.info')
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th>Nombre del producto</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <strong>{{ $user->name }}</strong>
                                    {{ $product->short }}
                                </td>
                                <td width="20px">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">
                                        Ver
                                    </a>
                                </td>
                                <td width="20px">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">
                                        Editar
                                    </a>
                                </td>
                                <td width="20px">
                                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-link">
                                            Borrar
                                        </button>							
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $products->render() !!}
                </div>
                <div class="col-xs-12 col-sm-4">
                    @include('products.partials.aside')
                </div>
            @endsection
        


 --}}




{{--    < div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
 --}}


{{-- 
                <ul id="users-list">
                  @foreach ($users as $user)
                  <li>
    
                          
                         

                         <div class="data">

                         <h4>{{$user->name}}</h4>

                          </div>
                     
                   </li>
                 @endforeach
            </ul> 
           
 --}}


        </div>
    </div>
    @endsection




