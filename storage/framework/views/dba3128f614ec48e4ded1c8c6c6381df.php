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
                            <div class="card-header">Create District
                                
                            </div>
                            <div class="card-body">
                                <?php echo Form::open(array('route' => 'district.store','method'=>'POST')); ?>

                                    <div class="form-group">
                                        <strong>District Name:</strong>
                                        <?php echo Form::text('DistrictName', null, array('placeholder' => 'Enter District Name','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group">


											<label class="control-label col-md-3 col-sm-3 ">Select Province</label>
                                            <select name="ProvinceID" class="form-control">
                                                <option>Choose option</option>
                                                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <option value="<?php echo e($province->ProvinceID); ?>"><?php echo e($province->ProvinceName); ?></option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>


                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/basic/district/create.blade.php ENDPATH**/ ?>