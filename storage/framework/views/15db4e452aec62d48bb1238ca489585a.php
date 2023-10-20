<?php $__env->startSection('contents'); ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title"><?php echo e(__('Student.Student List')); ?></h6>
            <div class="card-tools">
                <div class="title_right">
                    
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student-create')): ?>
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?php echo e(route('student.index')); ?>" method="GET" class="form-inline">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="<?php echo e(__('Student.Search by Student name!')); ?>">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><?php echo e(__('Users.Search')); ?></button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" name="searchbyrollno" class="form-control" placeholder="<?php echo e(__('Student.Search by Roll no!')); ?>">
                                <div class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit"><?php echo e(__('Users.Search')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-primary" href="<?php echo e(route('student.create')); ?>"><?php echo e(__('Student.New Student')); ?></a>
                        <a class="btn btn-primary" href="<?php echo e(route('StudentPDFReport')); ?>"><?php echo e(__('Student.Export Pdf')); ?></a>
                    </div>
                </div>

                
                <?php endif; ?>
            </div>
        </div>
            <div class="card-body">
                <?php echo e($data->render()); ?>

                <table id="myTable" class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th><?php echo e(__('Users.#')); ?></th>
                            <th><?php echo e(__('Student.Registration No')); ?></th>
                            <th><?php echo e(__('Student.Student Name')); ?></th>
                            <th><?php echo e(__('Student.Father Name')); ?></th>
                            <th><?php echo e(__('Student.Guardian Name')); ?></th>
                            <th><?php echo e(__('Student.Admission Date')); ?></th>
                            <th><?php echo e(__('Student.CNIC')); ?></th>
                            <th width="280px"><?php echo e(__('Users.Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($student->StudentID); ?></td>
                                <td><?php echo e($student->RegistrationNo); ?></td>
                                <td><?php echo e($student->StudentName); ?></td>
                                <td><?php echo e($student->FatherName); ?></td>
                                <td><?php echo e($student->GuardianName); ?></td>
                                <td><?php echo e($student->AdmissionDate); ?></td>
                                <td><?php echo e($student->SCNIC); ?></td>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student-list')): ?>
                                    <a class="btn btn-success" href="<?php echo e(route('student.show',$student->StudentID)); ?>"><?php echo e(__('Users.Show')); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student-edit')): ?>
                                        <a class="btn btn-primary" href="<?php echo e(route('student.edit', $student->StudentID)); ?>"><?php echo e(__('Users.Edit')); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student-delete')): ?>

                                        <?php echo Form::open(['method' => 'DELETE','route' => ['student.destroy', $student->StudentID],'style'=>'display:inline']); ?>


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
    'menu' => 'student',
    'sub_menu' => 'roleslist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/student/index.blade.php ENDPATH**/ ?>