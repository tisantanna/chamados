<?php $__env->startSection('content'); ?>

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>Requerentes</h4></b></div>
                    <div class="panel-body">
                        <a href="<?php echo e(url('/requerentes/create')); ?>" class="btn btn-success btn-sm" title="Adicionar requerente">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo
                        </a>

                        <?php echo Form::open(['method' => 'GET', 'url' => '/requerentes', 'class' => 'navbar-form navbar-right', 'role' => 'search']); ?>

                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Pesquisar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <?php echo Form::close(); ?>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Nome</th><th>Departamento</th><th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $requerentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->nome); ?></td><td><?php echo e($item->departamento); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/requerentes/' . $item->id)); ?>" title="Ver requerente"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="<?php echo e(url('/requerentes/' . $item->id . '/edit')); ?>" title="Editar requerente"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            <?php echo Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/requerentes', $item->id],
                                                'style' => 'display:inline'
                                            ]); ?>

                                                <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Deletar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Deletar requerente',
                                                        'onclick'=>'return confirm("Deseja realmente deletar?")'
                                                )); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $requerentes->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>