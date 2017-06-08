<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Localizacao;
use Illuminate\Http\Request;
use Session;

class LocalizacaoController extends Controller
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
            $localizacao = Localizacao::where('nome', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $localizacao = Localizacao::paginate($perPage);
        }

        return view('localizacao.index', compact('localizacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('localizacao.create');
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
        
        Localizacao::create($requestData);

        Session::flash('flash_message', 'Localizacao added!');

        return redirect('localizacao');
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
        $localizacao = Localizacao::findOrFail($id);

        return view('localizacao.show', compact('localizacao'));
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
        $localizacao = Localizacao::findOrFail($id);

        return view('localizacao.edit', compact('localizacao'));
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
        
        $localizacao = Localizacao::findOrFail($id);
        $localizacao->update($requestData);

        Session::flash('flash_message', 'Localizacao updated!');

        return redirect('localizacao');
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
        Localizacao::destroy($id);

        Session::flash('flash_message', 'Localizacao deleted!');

        return redirect('localizacao');
    }
}
