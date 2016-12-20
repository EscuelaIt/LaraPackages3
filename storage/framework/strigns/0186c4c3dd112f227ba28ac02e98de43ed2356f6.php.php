<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="button-right">
            <a href="<?php echo e(url('admin/roles/create')); ?>" class="btn btn-primary" role="button">Añadir Rol</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->index); ?></th>
                                <td><?php echo e($rol->name); ?></td>
                                <td><?php echo e($rol->description); ?></td>
                                <td><a href="<?php echo e(url('admin/roles/'.Hashids::encode($rol->id).'/edit')); ?>">Editar</a> | <a href="<?php echo e(url('admin/roles/destroy/'.Hashids::encode($rol->id).'')); ?>">Borrar</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>