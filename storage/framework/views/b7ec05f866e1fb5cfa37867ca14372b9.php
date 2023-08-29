<?php $__env->startSection('contents'); ?>

<section class="content-header">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title">Edit permission</h3>
                        <div class="card-tools" style="float: right;">
                            <a class="btn btn-primary" href="<?php echo e(route('permissions.index')); ?>">Permissions</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <?php echo Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method'=>'PATCH']); ?>

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <?php echo Form::text('name', null, array('id' => 'name', 'placeholder' => 'Name','class' => 'form-control')); ?>

                            </div>
                            <div class="form-group">
                                <label for="friendly_title">Friendly Title:</label>
                                <?php echo Form::text('friendly_title', null, array('id' => 'friendly_title', 'placeholder' => 'Friendly Title','class' => 'form-control')); ?>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'permissionlist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/permissions/edit.blade.php ENDPATH**/ ?>