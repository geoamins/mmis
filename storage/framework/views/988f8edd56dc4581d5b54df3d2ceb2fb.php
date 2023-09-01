<?php $__env->startSection('contents'); ?>
<div class="container">
    <div class="justify-content-center">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header"><?php echo e(__('users.Edit User')); ?>

                <span class="float-right">
                    <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>"><?php echo e(__('users.Back')); ?></a>
                </span>
            </div>

            <div class="card-body">
                <?php echo Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'PATCH' , 'enctype'=>'Multipart/form-data']); ?>

                    <div class="form-group">
                        <strong><?php echo e(__('users.Name')); ?>:</strong>
                        <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group">
                        <strong><?php echo e(__('users.Email')); ?>:</strong>
                        <?php echo Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group">
                        <strong><?php echo e(__('users.Image')); ?>:</strong>
                        <img src="<?php echo e(URL::to('/images')); ?>/<?php echo e($user->image); ?>" class="user-image" width="100" />
                        <input type="hidden" name="hidden_image" value="<?php echo e($user->image); ?>" />
                        <?php echo Form::file('image', array('placeholder' => 'image','class' => 'form-control')); ?>


                    </div>
                    <div class="form-group">
                        <strong><?php echo e(__('users.Password')); ?>:</strong>
                        <?php echo Form::password('password', array('placeholder' => 'Password','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group">
                        <strong><?php echo e(__('users.Confirm Password')); ?>:</strong>
                        <?php echo Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group">
                        <strong><?php echo e(__('users.Roles')); ?>:</strong>
                        <?php echo Form::select('roles[]', $roles, $userRole, array('class' => 'form-control','multiple')); ?>

                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('users.Submit')); ?></button>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'userlist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/users/edit.blade.php ENDPATH**/ ?>