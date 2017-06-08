<div class="form-group <?php echo e($errors->has('nome') ? 'has-error' : ''); ?>">
    <?php echo Form::label('nome', 'Nome', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('nome', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('nome', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('url') ? 'has-error' : ''); ?>">
    <?php echo Form::label('url', 'Url', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::textarea('url', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('url', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('icone') ? 'has-error' : ''); ?>">
    <?php echo Form::label('icone', 'Icone', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::textarea('icone', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('icone', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <?php echo Form::submit(isset($submitButtonText) ? $submitButtonText : 'Salvar Novo', ['class' => 'btn btn-primary']); ?>

    </div>
</div>
