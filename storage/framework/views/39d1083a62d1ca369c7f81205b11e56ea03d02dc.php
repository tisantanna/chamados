<div class="form-group <?php echo e($errors->has('nome') ? 'has-error' : ''); ?>">
    <?php echo Form::label('nome', 'Nome', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-10">
        <?php echo Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('nome', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <?php echo Form::submit(isset($submitButtonText) ? $submitButtonText : 'Salvar Novo', ['class' => 'btn btn-primary']); ?>

    </div>
</div>
