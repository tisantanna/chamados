<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    {!! Form::label('nome', 'Nome', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('departamento') ? 'has-error' : ''}}">
    {!! Form::label('departamento', 'Departamento', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('departamento', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('departamento', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Salvar Novo', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
