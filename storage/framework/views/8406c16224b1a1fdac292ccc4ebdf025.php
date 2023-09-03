<?php $__env->startSection('contents'); ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title"><?php echo e(__('Users.Roles')); ?></h6>
            <div class="card-tools">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="<?php echo e(route('roles.create')); ?>"><?php echo e(__('Users.New Role')); ?></a>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th><?php echo e(__('Users.#')); ?></th>
                        <th><?php echo e(__('Users.Name')); ?></th>
                        <th width="280px"><?php echo e(__('Users.Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($role->id); ?></td>
                            <td><?php echo e($role->name); ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('roles.show',$role->id)); ?>"><?php echo e(__('Users.Show')); ?></a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                                    <a class="btn btn-primary" href="<?php echo e(route('roles.edit',$role->id)); ?>"><?php echo e(__('Users.Edit')); ?></a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                                    <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>

                                    

                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'><?php echo e(__('Users.Delete')); ?></button>
                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($data->render()); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/roles/index.blade.php ENDPATH**/ ?>