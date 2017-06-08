<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    {!! Form::label('nome', 'Nome', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
    {!! Form::label('url', 'Url', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('url', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('icone') ? 'has-error' : ''}}">
    {!! Form::label('icone', 'Icone', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('icone', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('icone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Salvar Novo', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
