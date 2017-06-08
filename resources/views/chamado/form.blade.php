<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
    {!! Form::label('descricao', 'Descricao', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('descricao', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    {!! Form::label('categoria_id', 'Categoria', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('categoria_id',$categorias,null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('data_abertura') ? 'has-error' : ''}}">
    {!! Form::label('data_abertura', 'Data Abertura', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::date('data_abertura', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('data_abertura', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('data_vencimento') ? 'has-error' : ''}}">
    {!! Form::label('data_vencimento', 'Data Vencimento', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::date('data_vencimento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('data_vencimento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('requerente_id') ? 'has-error' : ''}}">
    {!! Form::label('requerente_id', 'Requerente', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('requerente_id',$requerentes, null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('requerente_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('responsavel_id') ? 'has-error' : ''}}">
    {!! Form::label('responsavel_id', 'Responsável', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('responsavel_id', $responsaveis,null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('responsavel_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status_id') ? 'has-error' : ''}}">
    {!! Form::label('status_id', 'Status', ['class' => 'col-md-2 control-label', 'required' => 'required']) !!}
    <div class="col-md-10">
        {!! Form::select('status_id',$status, null, ['class' => 'form-control']) !!}
        {!! $errors->first('status_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('localizacao_id') ? 'has-error' : ''}}">
    {!! Form::label('localizacao_id', 'Localização', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('localizacao_id', $localizacoes,null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('localizacao_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Salvar Novo', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
