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
            <div class="card-header">Edit Province
                <span class="float-right">
                    <a class="btn btn-primary" href="<?php echo e(route('province.index')); ?>">back</a>
                </span>
            </div>


                <form action="<?php echo e(route('class.update',$data->ClassID)); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('put')); ?>


                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Class Name
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="<?php echo e($data->ClassName); ?>" name="ClassName" placeholder="Enter the Class Name" class="form-control ">

                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rizwansarwar/Desktop/Laravel-Web/mmis/resources/views/basic/sclass/edit.blade.php ENDPATH**/ ?>