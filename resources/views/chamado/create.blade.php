@extends('adminlte::page')

@section('content')

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>Inserir Chamado</h4></b></div>
                    <div class="panel-body">
                        <a href="{{ url('/chamado') }}" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/chamado', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('chamado.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

@endsection
