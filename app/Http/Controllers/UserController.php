<?php

namespace App\Http\Controllers;

use App\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(){

        $this->middleware(['auth','roles:admin,otro']);

        
    }
     
    public function index()
    {

/*    $users = User::all();
        foreach($users as $user)
return view('lista',$datos);  */

        //
    /*     $users = User::all();
        foreach($users as $user)
      {
              echo $user->name;
       
     echo "<hr/>";
    } */
         $datos['users']=user::paginate(5);
         return view('empleados.index',$datos); 
/*  $data = DB::table('users')->paginate(5);
        return view('lista');  */

/*
      $users = User::paginate(5);
return view('lista',array(
    'users'=>$users)); 
 */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function store(Request $request)

    {
     $campos=[
        'name' => 'required|string|max:100',
        'surname' => 'required|string|max:100',
        'email'=> 'required|email',
        'password'=>'required|max:60' 
    ];
    $Mensaje=["required"=>'El :attribute es requerido'];
    
    $this->validate($request,$campos,$Mensaje);
        //
       /*  $datosEmpleado = request()->all();  */
     //   $datosEmpleado=request()->except('_token');
      //  $user = user::insert($datosEmpleado);

        $user = new User;

        $user->name     = request()->get('name');
        $user->surname  = request()->get('surname');
        $user->password = Hash::make(request()->get('password'));
        $user->email    = request()->get('email');

        $user->save();

        return redirect('empleados/'.$user->id.'/edit')
            ->with('Mensaje','Empleado agregado con éxito');

    //    return redirect('empleados')
    //    ->with('Mensaje','Empleado agregado con éxito');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $user = user::findOrFail($id);
        return view('empleados.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $id)
    {
        //

        $campos=[
            'name' => 'required|string|max:100',
            'surname' => 'nullable|string|max:100',
            'email'=> 'required|email',
            'password'=>'max:60' 
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        
        $this->validate($request,$campos,$Mensaje);
    

       //$datosEmpleado=request()->except(['_token','_method']); 
      // user::where('id','=',$id)->update($datosEmpleado);

       $user = User::findOrFail($id);

        $user->name     = request()->get('name');
        $user->surname  = request()->get('surname') ?? 'nameless';
        if(request()->get('password'))
            $user->password = Hash::make(request()->get('password'));
        $user->email    = request()->get('email');

        $user->save();

        return redirect('empleados/'.$user->id.'/edit')
            ->with('Mensaje','Empleado agregado con éxito');


          /* $user=user::findOrFail($id); 
          return view('empleados.edit',compact('user'));    
          return redirect('empleados')
          ->with('Mensaje','Empleado modificado con éxito'); */  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       /* users::destroy($id); */
     user::find($id)->delete();
     return redirect('empleados')->with('Mensaje','Empleado eliminado');
       /*  return back(); */
    }
}
