@extends('adminlte::page')



@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><b>Categorias</b></h4></div>
            <div class="panel-body">
                <a href="{{ url('/categorias/create') }}" class="btn btn-success btn-sm" title="Adicionar Categoria">
                    <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo
                </a>

                {!! Form::open(['method' => 'GET', 'url' => '/categorias', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                <th>ID</th><th>Nome</th><th>Descrição</th><th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categorias as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nome }}</td><td>{{ $item->descricao }}</td>
                                <td>
                                    <a href="{{ url('/categorias/' . $item->id) }}" title="Ver Categoria"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                    <a href="{{ url('/categorias/' . $item->id . '/edit') }}" title="Editae Categoria"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/categorias', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Deletar', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Deletar Categoria',
                                                'onclick'=>'return confirm("Deseja realmente deletar?")'
                                        )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $categorias->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>

            </div>
        </div>
    </div>

@endsection
