<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>
                <div class="panel-body">
                    <form action="<?php echo e($formAction); ?>" enctype="multipart/form-data" method="post">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Nombre
                                </label>
                                <input class="form-control" name="name" type="text" value="<?php if($role->name): ?><?php echo e($role->name); ?> <?php endif; ?>">
                                </input>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Descripción
                                </label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"><?php if($role->description): ?><?php echo e($role->description); ?><?php endif; ?></textarea>
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