<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>
                <div class="panel-body">
                    <form action="<?php echo e($formAction); ?>" enctype="multipart/form-data" method="post">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Nombre
                                </label>
                                <input class="form-control" name="name" type="text" value="<?php if($user->name): ?><?php echo e($user->name); ?> <?php endif; ?>">
                                </input>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role[]" multiple="multiple" multiple data-placeholder="Roles ...">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
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