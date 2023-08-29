<?php $__env->startSection('contents'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>


<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header with-border">
            <h3 class="card-title">Show permissions</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                <label for="Name">Name :</label>
                <?php echo e($permission->name); ?>

              </div>
            </div>
            <!-- /.card-body -->
          </form>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'permissionlist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mmis\resources\views/permissions/show.blade.php ENDPATH**/ ?>