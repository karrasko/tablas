<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User; 
use App\fichajestarea;
use Illuminate\Http\Request;

class fichajestareasController extends Controller
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
            $fichajestareas = fichajestarea::where('id_fichatarea', 'LIKE', "%$keyword%")
                ->orWhere('id_proyecto', 'LIKE', "%$keyword%")
                ->orWhere('id_tarea', 'LIKE', "%$keyword%")
                ->orWhere('id_asistencia', 'LIKE', "%$keyword%")
                ->orWhere('fech_ini', 'LIKE', "%$keyword%")
                ->orWhere('fech_fin', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $fichajestareas = fichajestarea::latest()->paginate($perPage);
        }

        return view('fichajestareas.index', compact('fichajestareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('fichajestareas.create');
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
        
        fichajestarea::create($requestData);

        return redirect('fichajestareas')->with('flash_message', 'fichajestarea added!');
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
        $fichajestarea = fichajestarea::findOrFail($id);

        return view('fichajestareas.show', compact('fichajestarea'));
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
        $fichajestarea = fichajestarea::findOrFail($id);

        return view('fichajestareas.edit', compact('fichajestarea'));
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
        
        $fichajestarea = fichajestarea::findOrFail($id);
        $fichajestarea->update($requestData);

        return redirect('fichajestareas')->with('flash_message', 'fichajestarea updated!');
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
        fichajestarea::destroy($id);

        return redirect('fichajestareas')->with('flash_message', 'fichajestarea deleted!');
    }
}
