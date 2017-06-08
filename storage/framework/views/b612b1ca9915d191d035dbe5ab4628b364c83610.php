<?php $__env->startSection('content'); ?>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><b>Inserir Categoria</b></h4></div>
            <div class="panel-body">
                <a href="<?php echo e(url('/categorias')); ?>" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                <br />
                <br />

                <?php if($errors->any()): ?>
                    <ul class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>

                <?php echo Form::open(['url' => '/categorias', 'class' => 'form-horizontal', 'files' => true]); ?>


                <?php echo $__env->make('categorias.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>