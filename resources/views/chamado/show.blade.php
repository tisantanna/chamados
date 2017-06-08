@extends('adminlte::page')

@section('content')

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>Chamado {{ $chamado->id }}</h4></b></div>
                    <div class="panel-body">

                        <a href="{{ url('/chamado') }}" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/chamado/' . $chamado->id . '/edit') }}" title="Editar Chamado"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['chamado', $chamado->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Deletar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Deletar Chamado',
                                    'onclick'=>'return confirm("Deseja realmente deletar?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $chamado->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Titulo </th><td> {{ $chamado->titulo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Descricao </th><td> {{ $chamado->descricao }} </td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th><td> {{ $chamado->categoria->nome }} </td>
                                    </tr>
                                    <tr>
                                        <th> Data de Abertura </th><td> {{ $chamado->data_abertura }} </td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th><td> {{ $chamado->categoria->nome }} </td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th><td> {{ $chamado->categoria->nome }} </td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th><td> {{ $chamado->categoria->nome }} </td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th><td> {{ $chamado->categoria->nome }} </td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th><td> {{ $chamado->categoria->nome }} </td>
                                    </tr>   
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
