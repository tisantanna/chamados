<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Requerente;
use Illuminate\Http\Request;
use Session;

class RequerentesController extends Controller
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
            $requerentes = Requerente::where('nome', 'LIKE', "%$keyword%")
				->orWhere('departamento', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $requerentes = Requerente::paginate($perPage);
        }

        return view('requerentes.index', compact('requerentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('requerentes.create');
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
        
        Requerente::create($requestData);

        Session::flash('flash_message', 'Requerente added!');

        return redirect('requerentes');
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
        $requerente = Requerente::findOrFail($id);

        return view('requerentes.show', compact('requerente'));
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
        $requerente = Requerente::findOrFail($id);

        return view('requerentes.edit', compact('requerente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $requerente = Requerente::findOrFail($id);
        $requerente->update($requestData);

        Session::flash('flash_message', 'Requerente updated!');

        return redirect('requerentes');
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
        Requerente::destroy($id);

        Session::flash('flash_message', 'Requerente deleted!');

        return redirect('requerentes');
    }
}
