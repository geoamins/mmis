<?php $__env->startSection('contents'); ?>
<section class="content-header">

</section>
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
            <div class="card-header"><?php echo e(__('Basic.Edit Country')); ?>

                <span class="float-right">
                    <a class="btn btn-primary" href="<?php echo e(route('country.index')); ?>"><?php echo e(__('Users.Back')); ?></a>
                </span>
            </div>


                <form action="<?php echo e(route('country.update',$data->CountryID)); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('put')); ?>


                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><?php echo e(__('Basic.Country Name')); ?>

                        <span class="required"></span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="<?php echo e($data->CountryName); ?>" name="CountryName" placeholder="<?php echo e(__('Basic.Please Enter your Country name here!')); ?>" class="form-control ">

                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Users.Submit')); ?></button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/basic/country/edit.blade.php ENDPATH**/ ?>