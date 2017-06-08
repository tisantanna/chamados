<?php $__env->startSection('content'); ?>

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>Menu <?php echo e($menu->id); ?></h4></b></div>
                    <div class="panel-body">

                        <a href="<?php echo e(url('/menu')); ?>" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="<?php echo e(url('/menu/' . $menu->id . '/edit')); ?>" title="Editar Menu"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['menu', $menu->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Deletar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Deletar Menu',
                                    'onclick'=>'return confirm("Deseja realmente deletar?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($menu->id); ?></td>
                                    </tr>
                                    <tr><th> Nome </th><td> <?php echo e($menu->nome); ?> </td></tr><tr><th> Url </th><td> <?php echo e($menu->url); ?> </td></tr><tr><th> Icone </th><td> <?php echo e($menu->icone); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>