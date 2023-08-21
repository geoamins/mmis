<?php $__env->startSection('contents'); ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Permissions</h6>
            <div class="card-tools">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                    <span style="float: right;">
                        <a class="btn btn-primary" href="<?php echo e(route('permissions.create')); ?>">New Permission</a>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Friendly Title</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($permission->id); ?></td>
                            <td><?php echo e($permission->name); ?></td>
                            <td><?php echo e($permission->friendly_title); ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('permissions.show',$permission->id)); ?>">Show</a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                                    <a class="btn btn-primary" href="<?php echo e(route('permissions.edit',$permission->id)); ?>">Edit</a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                                    <?php echo Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline', 'class' => 'del-permissions']); ?>

                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-permissions" data-toggle="tooltip" title='Delete'>Delete</button>
                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($data->appends($_GET)->links()); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'permissionlist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/permissions/index.blade.php ENDPATH**/ ?>