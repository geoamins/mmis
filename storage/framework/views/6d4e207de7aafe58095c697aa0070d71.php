<?php $__env->startSection('contents'); ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title"><?php echo e(__('Basic.Province List')); ?></h6>

            <div class="card-tools">
                <div class="title_right">
                    <form action="<?php echo e(route('province.index')); ?>" method="GET">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">

                                    <input type="text" name="search" class="form-control" placeholder="<?php echo e(__('Basic.Search for')); ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary"  type="submit"><?php echo e(__('Basic.go!')); ?></button>
                                    </span>

                            </div>
                        </div>
                    </form>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('province-create')): ?>
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="<?php echo e(route('province.create')); ?>">Add Province</a>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <?php echo e($data->render()); ?>

            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th><?php echo e(__('Users.#')); ?></th>
                        <th><?php echo e(__('Basic.Province Name')); ?></th>
                        <th><?php echo e(__('Basic.Country Name')); ?></th>
                        <th width="280px"><?php echo e(__('Users.Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($province->ProvinceID); ?></td>
                            <td><?php echo e($province->ProvinceName); ?></td>
                            <td><?php echo e($province->CountryName); ?></td>
                            <td>
                                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('province-edit')): ?>
                                    <a class="btn btn-primary" href="<?php echo e(route('province.edit', $province->ProvinceID)); ?>"><?php echo e(__('Users.Edit')); ?></a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('province-delete')): ?>
                                <button type="submit" data-id="delete-province" class="btn btn-danger del-popup" data-toggle="tooltip" title='Delete'><?php echo e(__('Users.Delete')); ?></button>
                                    <?php echo Form::open(['id' => 'delete-province', 'method' => 'DELETE','route' => ['province.destroy', $province->ProvinceID],'style'=>'display:inline']); ?>


                                        <input name="_method" type="hidden" value="DELETE">

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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/basic/province/index.blade.php ENDPATH**/ ?>