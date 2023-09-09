<?php $__env->startSection('contents'); ?>

<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title"><?php echo e(__('Users.Create Permission')); ?></h6>
                    <div class="float-right">
                        <a class="btn btn-primary" href="<?php echo e(route('permissions.index')); ?>"><?php echo e(__('Users.Back')); ?></a>
                    </div>
                </div>
                <div class="card-body">
                    <?php echo Form::open(array('route' => 'permissions.store','method'=>'POST')); ?>

                        <div class="form-group">
                            <label for="name"><?php echo e(__('Users.Name')); ?>:</label>
                            <?php echo Form::text('name', null, array('id' => 'name', 'placeholder' => 'Name','class' => 'form-control')); ?>

                        </div>
                        <div class="form-group">
                            <label for="friendly_title"><?php echo e(__('Users.Friendly Title')); ?>:</label>
                            <?php echo Form::text('friendly_title', null, array('id' => 'friendly_title', 'placeholder' => 'Friendly Title','class' => 'form-control')); ?>

                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Users.Submit')); ?></button>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'permissionlist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/permissions/create.blade.php ENDPATH**/ ?>