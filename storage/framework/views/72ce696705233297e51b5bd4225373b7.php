<?php $__env->startSection('contents'); ?>
<div class="container">
    <div class="justify-content-center">
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('success')); ?></p>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">User
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                    <span class="float-right">
                        <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>">Back</a>
                    </span>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    <?php echo e($user->name); ?>

                </div>
                <div class="lead">
                    <strong>Email:</strong>
                    <?php echo e($user->email); ?>

                </div>
                <div class="lead">
                    <strong>Password:</strong>
                    ********
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'userlist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/users/show.blade.php ENDPATH**/ ?>