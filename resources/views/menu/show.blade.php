@extends('adminlte::page')

@section('content')

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>Menu {{ $menu->id }}</h4></b></div>
                    <div class="panel-body">

                        <a href="{{ url('/menu') }}" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/menu/' . $menu->id . '/edit') }}" title="Editar Menu"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['menu', $menu->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Deletar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Deletar Menu',
                                    'onclick'=>'return confirm("Deseja realmente deletar?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $menu->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $menu->nome }} </td></tr><tr><th> Url </th><td> {{ $menu->url }} </td></tr><tr><th> Icone </th><td> {{ $menu->icone }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
