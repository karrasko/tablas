<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tarea;
use Illuminate\Http\Request;

class tareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tareas = tarea::where('Fichaje', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('Mensaje', 'LIKE', "%$keyword%")
                ->orWhere('Correo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tareas = tarea::latest()->paginate($perPage);
        }

        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        tarea::create($requestData);

        return redirect('tareas')->with('flash_message', 'tarea added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *   
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tarea = tarea::findOrFail($id);

        return view('tareas.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tarea = tarea::findOrFail($id);

        return view('tareas.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $tarea = tarea::findOrFail($id);
        $tarea->update($requestData);

        return redirect('tareas')->with('flash_message', 'tarea updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        tarea::destroy($id);

        return redirect('tareas')->with('flash_message', 'tarea deleted!');
    }
}
