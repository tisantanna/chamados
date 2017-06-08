<div class="form-group <?php echo e($errors->has('titulo') ? 'has-error' : ''); ?>">
    <?php echo Form::label('titulo', 'Titulo', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('titulo', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('descricao') ? 'has-error' : ''); ?>">
    <?php echo Form::label('descricao', 'Descricao', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::textarea('descricao', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('descricao', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('categoria_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('categoria_id', 'Categoria', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::select('categoria_id',$categorias,null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('categoria_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('data_abertura') ? 'has-error' : ''); ?>">
    <?php echo Form::label('data_abertura', 'Data Abertura', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::date('data_abertura', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('data_abertura', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('data_vencimento') ? 'has-error' : ''); ?>">
    <?php echo Form::label('data_vencimento', 'Data Vencimento', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::date('data_vencimento', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('data_vencimento', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('requerente_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('requerente_id', 'Requerente', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::select('requerente_id',$requerentes, null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('requerente_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('responsavel_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('responsavel_id', 'Responsável', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::select('responsavel_id', $responsaveis,null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('responsavel_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('status_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('status_id', 'Status', ['class' => 'col-md-2 control-label', 'required' => 'required']); ?>

    <div class="col-md-10">
        <?php echo Form::select('status_id',$status, null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('status_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('localizacao_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('localizacao_id', 'Localização', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::select('localizacao_id', $localizacoes,null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('localizacao_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <?php echo Form::submit(isset($submitButtonText) ? $submitButtonText : 'Salvar Novo', ['class' => 'btn btn-primary']); ?>

    </div>
</div>
