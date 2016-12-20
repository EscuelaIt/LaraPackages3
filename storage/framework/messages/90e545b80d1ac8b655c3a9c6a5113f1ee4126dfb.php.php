<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="button-right">
            <a href="<?php echo e(url(App\Lib\Functions::parseLang().'/admin/recipes/create')); ?>" class="btn btn-primary" role="button">Añadir receta</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Recetas</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th><?php echo e(__('Duracion')); ?></th>
                                <th>Nivel</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->index); ?></th>
                                <td><?php echo e($recipe->title); ?></td>
                                <td><?php echo e($recipe->duration); ?></td>
                                <td><?php echo e($recipe->level); ?></td>
                                <td><a href="<?php echo e(url(App\Lib\Functions::parseLang().'/admin/recipes/'.Hashids::encode($recipe->id).'/edit')); ?>">Editar</a> | <a href="<?php echo e(url(App\Lib\Functions::parseLang().'/admin/recipes/destroy/'.Hashids::encode($recipe->id).'')); ?>">Borrar</a></td>
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