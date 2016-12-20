<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Recetas</div>
                <div class="panel-body">
                    <form action="<?php echo e($formAction); ?>" enctype="multipart/form-data" method="post">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Nombre
                                </label>
                                <input class="form-control" name="title" type="text" value="<?php if($recipe->title): ?><?php echo e($recipe->title); ?> <?php endif; ?>">
                                </input>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Descripción
                                </label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"><?php if($recipe->description): ?><?php echo e($recipe->description); ?><?php endif; ?></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Nivel
                                </label>
                                <input class="form-control" name="level" type="text" value="<?php if($recipe->level): ?><?php echo e($recipe->level); ?><?php endif; ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Duración
                                </label>
                                <input class="form-control" name="duration" type="text" value="<?php if($recipe->duration): ?><?php echo e($recipe->duration); ?><?php endif; ?>">
                            </div>
                        </div>

                        <div class="col-sm-12">
                        <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                            <button class="btn btn-default waves-effect waves-light" id="enviar" type="submit">
                                Enviar
                            </button>
                        </input>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>