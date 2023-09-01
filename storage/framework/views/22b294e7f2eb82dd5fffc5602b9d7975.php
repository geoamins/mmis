<?php $__env->startSection('contents'); ?>
<section class="content-header">

</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
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
                            <div class="card-header"><?php echo e(__('Basic.Create Country')); ?>

                                <span class="float-right">
                                    <a class="btn btn-primary" href="<?php echo e(route('country.index')); ?>"><?php echo e(__('Users.Back')); ?></a>
                                </span>
                            </div>
                            <div class="card-body">
                                <?php echo Form::open(array('route' => 'country.store','method'=>'POST')); ?>

                                    <div class="form-group">
                                        <strong><?php echo e(__('Basic.Country Name')); ?></strong>
                                        <?php echo Form::text('CountryName', null, [
                                            'placeholder' => __('Basic.Please Enter your Country name here!'),
                                            'class' => 'form-control'
                                        ]); ?>

                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Users.Submit')); ?></button>
                                <?php echo Form::close(); ?>

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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/basic/country/create.blade.php ENDPATH**/ ?>