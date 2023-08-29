<?php $__env->startSection('contents'); ?>

                <section class="content-header">

                </section>
<div class="container">
    <div class="justify-content-center">
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('success')); ?></p>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">Role
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                    <span class="float-right">
                        <a class="btn btn-primary" href="<?php echo e(route('roles.index')); ?>">Back</a>
                    </span>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    <?php echo e($role->name); ?>

                </div>
                <div class="lead">
                    <strong>Permissions:</strong>
                    <?php if(!empty($rolePermissions)): ?>
                        <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label class="badge badge-success"><?php echo e($permission->name); ?></label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
            

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/roles/show.blade.php ENDPATH**/ ?>