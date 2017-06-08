@include(public_path().'\functions.php')
@extends('adminlte::page')

@section('content')

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>Chamado</h4></b></div>
                    <div class="panel-body">
                        <a href="{{ url('/chamado/create') }}" class="btn btn-success btn-sm" title="Adicionar Chamado">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/chamado', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Pesquisar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Titulo</th><th>Status</th><th>Data de Abertura</th><th>Requerente</th><th>Responsável</th><th>Categoria</th><th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($chamado as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->titulo }}</td><td>{{ $item->status->descricao }}</td>
                                        <td>{{ format_br_datetime($item->data_abertura) }}</td><td>{{ $item->requerente->nome }}</td><td>{{ $item->responsavel->name }}</td><td>{{ $item->categoria->nome }}</td>
                                        <td>
                                            <a href="{{ url('/chamado/' . $item->id) }}" title="Ver Chamado"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/chamado/' . $item->id . '/edit') }}" title="Editar Chamado"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/chamado', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Deletar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Deletar Chamado',
                                                        'onclick'=>'return confirm("Deseja realmente deletar?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $chamado->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>

@endsection
