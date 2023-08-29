<?php $__env->startSection('contents'); ?>
<section class="content-header">
    
</section>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?php echo e(__('admin.user-list')); ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?php echo e(route('users.index')); ?>" method="GET" class="form-inline">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Search by name">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="<?php echo e(route('users.create')); ?>">New User</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Image</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td>
                                <?php if(!empty($user->getRoleNames())): ?>
                                    <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="badge badge-dark"><?php echo e($val); ?></label>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <img width="50" src="<?php echo e(asset('images/' . $user->image)); ?>" />
                            </td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('users.show',$user->id)); ?>">Show</a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                                    <a class="btn btn-primary" href="<?php echo e(route('users.edit',$user->id)); ?>">Edit</a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-delete')): ?>
                                    <?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']); ?>

                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>Delete</button>
                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="text-right">
                <?php echo e($data->render()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'userlist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/users/index.blade.php ENDPATH**/ ?>