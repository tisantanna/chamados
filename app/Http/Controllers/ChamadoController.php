<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Chamado;
use App\Categoria;
use App\User;
use App\Localizacao;
use App\Requerente;
use App\Status;
use Illuminate\Http\Request;
use Session;

class ChamadoController extends Controller
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
            $chamado = Chamado::where('titulo', 'LIKE', "%$keyword%")
				->orWhere('descricao', 'LIKE', "%$keyword%")
				->orWhere('categoria_id', 'LIKE', "%$keyword%")
				->orWhere('data_abertura', 'LIKE', "%$keyword%")
				->orWhere('data_vencimento', 'LIKE', "%$keyword%")
				->orWhere('data_fechamento', 'LIKE', "%$keyword%")
				->orWhere('requerente_id', 'LIKE', "%$keyword%")
				->orWhere('responsavel_id', 'LIKE', "%$keyword%")
				->orWhere('status_id', 'LIKE', "%$keyword%")
				->orWhere('localizacao_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $chamado = Chamado::paginate($perPage);
        }

        return view('chamado.index', compact('chamado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categorias=Categoria::pluck('nome','id');
        $responsaveis=User::pluck('name','id');
        $requerentes=Requerente::pluck('nome','id');
        $status=Status::pluck('descricao','id');
        $localizacoes=Localizacao::pluck('nome','id');
        return view('chamado.create',compact('categorias','responsaveis','requerentes','status','localizacoes'));
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
        
        Chamado::create($requestData);

        Session::flash('flash_message', 'Chamado added!');

        return redirect('chamado');
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
        $chamado = Chamado::findOrFail($id);

        return view('chamado.show', compact('chamado'));
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
        $chamado = Chamado::findOrFail($id);
        $categorias=Categoria::pluck('nome','id');
        $responsaveis=User::pluck('name','id');
        $requerentes=Requerente::pluck('nome','id');
        $status=Status::pluck('descricao','id');
        $localizacoes=Localizacao::pluck('nome','id');
        return view('chamado.edit', compact('chamado','categorias','responsaveis','requerentes','status','localizacoes'));
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
        
        $chamado = Chamado::findOrFail($id);
        $chamado->update($requestData);

        Session::flash('flash_message', 'Chamado updated!');

        return redirect('chamado');
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
        Chamado::destroy($id);

        Session::flash('flash_message', 'Chamado deleted!');

        return redirect('chamado');
    }
}
