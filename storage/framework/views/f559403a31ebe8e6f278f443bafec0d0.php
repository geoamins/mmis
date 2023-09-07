<?php $__env->startSection('contents'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .dob{
            display: flex;
        }

        .form{
            margin: 5%;
        }
        .formbody{
            display: flex;
        }
        .formbody .left{
            width: 80%;
        }
        .formbody .right{
            width: 20%;
        }

        .pic{
            width: 55%;
            height: 180px;
            border: 1px solid black;
        }

        #imagePreview{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right input{
            margin-top: 10px;
        }

        .sig{
            width: 55%;
            height: 75px;
            border: 1px solid black;
            margin-top: 10px;
        }


        .formbody .left input{
            width: 30%;
            height: 35px;
            border-radius: 4px;
            background-color: rgb(232, 231, 231);
            border: none;
            padding-left: 8px;
            margin-top: 10px;
            margin-right: 5px;
        }

        .name{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .name div{
            width: 30%;
        }

         p{
            margin-bottom: 0px;
        }

        .name .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(190, 190, 190);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .name .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .name .third input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .registration{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .registration div{
            width: 30%;
        }

        .registration .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .registration .second select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .registration .third select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .age div{
            width: 30%;
        }

        .age .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .age .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .age .third input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .contactno{
            display: flex;
            width: 92%;
            /* justify-content: space-between; */
            margin-top: 10px;
        }

        .contactno div{
            width: 30%;
            margin-right: 50px;
        }

        .contactno .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .contactno .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
            /* .contactno .third input{
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(232, 231, 231);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            } */

        .guardian{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .guardian div{
            width: 30%;
        }

        .guardian .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .guardian .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .guardian .third input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .age{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }


        .dob{
            /* margin-top: 10px; */
        }
        .dob .left{
            width: 50%;
            height: 50px;
        }
        .dobfield select{
            width: 30%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .genright{
            width: 42%;
        }
        .dob .genright select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .address{
            width: 100%;
            margin-top: 10px;
        }

        #addressfield{
            width: 92%;
            height: 35px;
            border-radius: 4px;
            background-color: rgb(232, 231, 231);
            border: none;
            padding-left: 8px;
            margin-bottom: 10px;
        }
        .country{
            display: flex;
            width: 92%;
            justify-content: space-between;
        }

        .country div{
            width: 30%;
        }

        .country .first select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .country .second select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .country .third select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .session{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .session div{
            width: 30%;
        }

        .session .first select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .session .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .session .third input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .description{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .description div{
            width: 30%;
        }

        .description .first select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .description .second select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .description .third select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .resident{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .resident div{
            width: 30%;
        }

        .resident .first select{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .resident .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .resident .third input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .additionalability{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .additionalability div{
            width: 30%;
        }

        .additionalability .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .additionalability .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .additionalability .third input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .feediscount{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .feediscount div{
            width: 30%;
        }

        .feediscount .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .feediscount .second input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }
        .feediscount .third input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .reason{
            display: flex;
            width: 92%;
            justify-content: space-between;
            margin-top: 10px;
        }

        .reason div{
            width: 30%;
        }

        .reason .first input{
            width: 100%;
            height: 35px;
            border: none;
            background-color: rgb(232, 231, 231);
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            margin-right: 4px;
            margin-top: 10px;
        }

        .buttons{
            width: 92%;
            height: 50px;
            display: flex;
            justify-content: end;
        }

        .buttons button{
            /* width: 80px;
            height: 40px;
            border: none;
            border-radius: 4px;
            background-color: rgb(194, 193, 193);
            font-weight: bold;
            margin-left: 10px; */
        }
        .table{
            width: 100%;
            margin: 5%;
        }
        .table table th{
            background-color: rgb(202, 202, 202);
            color: black;
            font-weight: bold;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 30px;
            padding-right: 30px;
            border: 2px solid black
        }
        .table table{
            border-spacing: 0px;
        }
        .table table td{
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 15px;
            padding-bottom: 15px;
            border: 1px solid black


        }
        .table table td button{
            height: 35px;
            width: 80px;
            border: none;
            border-radius: 4px;
            background-color: rgb(194, 193, 193);
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form action="<?php echo e(route('student.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    <div class="form">
            <h1>
                <?php echo e(__('Student.Registration Form')); ?>

            </h1>
            <p><?php echo e(__('Student.Fill out the form carefully for registration')); ?></p>
        <div class="formbody">
            <div class="left">

                <div class="name">
                    <div class="first">
                        <p><?php echo e(__('Student.Registration No')); ?></p>
                        <?php
                            $RegistrationNo = $LastRegNo + 1;
                        ?>
                        <input type="text" name="RegistrationNo" value="<?php echo e($RegistrationNo); ?>" readonly>
                            <?php $__errorArgs = ['RegistrationNo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Registration No is Required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div class="second">
                        <p><?php echo e(__('Student.Student Name')); ?></p>
                        <input type="text" name="StudentName" value="<?php echo e(old('StudentName')); ?>">
                        <span>
                            <?php $__errorArgs = ['StudentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Student name is Required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Student.CNIC')); ?></p>
                        <input type="text" name="SCNIC" value="<?php echo e(old('SCNIC')); ?>">
                        <span>
                            <?php $__errorArgs = ['SCNIC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Student CNIC is Required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                </div>

                <div class="registration">
                    <div class="first">
                        <p><?php echo e(__('Student.DOB')); ?></p>
                        <input type="date" name="DOB" value="<?php echo e(old('DOB')); ?>">
                        <span>
                            <?php $__errorArgs = ['DOB'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('DOB is Required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                    <div class="second">
                        <p><?php echo e(__('Student.Gender')); ?></p>
                        <select id="" name="GenderID">
                            <option value=""><?php echo e(__('Student.Select Gender')); ?></option>
                            <option value="1"><?php echo e(__('Student.Male')); ?></option>
                            <option value="2"><?php echo e(__('Student.Female')); ?></option>
                        </select>
                        <span>
                            <?php $__errorArgs = ['GenderID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please select gender'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                    <div class="third">
                        <p><?php echo e(__('Basic.Department Name')); ?></p>
                        <select id="" name="DeptID">
                            <option value=""><?php echo e(__('Student.Select Department')); ?></option>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($department->DeptID); ?>"><?php echo e($department->DepartmentName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span>
                            <?php $__errorArgs = ['DeptID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please select department'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                </div>

                <div class="age">
                    <div class="first">
                        <p><?php echo e(__('Student.Father Name')); ?></p>
                        <input type="text" name="FatherName" value="<?php echo e(old('FatherName')); ?>">
                        <span>
                            <?php $__errorArgs = ['FatherName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Father Name is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="second">
                        <p><?php echo e(__('Student.Father CNIC')); ?></p>
                        <input type="text" name="FCNIC" value="<?php echo e(old('FCNIC')); ?>">
                        <span>
                            <?php $__errorArgs = ['FCNIC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Father CNIC is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Student.Guardian Name')); ?></p>
                        <input type="text" name="GuardianName" value="<?php echo e(old('GuardianName')); ?>">
                        <span>
                            <?php $__errorArgs = ['GuardianName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Guardian Name is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                </div>

                <div class="contactno">
                    <div class="first">
                        <p><?php echo e(__('Student.Guardian Relation')); ?></p>
                        <input type="text" name="GuardianRelation" value="<?php echo e(old('GuardianRelation')); ?>">
                        <span>
                            <?php $__errorArgs = ['GuardianRelation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Guardian Relation is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="second">
                        <p><?php echo e(__('Student.Father Mobile')); ?></p>
                        <input type="text" name="FMobile" value="<?php echo e(old('FMobile')); ?>">
                        <span>
                            <?php $__errorArgs = ['FMobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Father Mobile No is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                </div>

                <div class="address">
                    <p><?php echo e(__('Student.Current Address')); ?></p>
                    <input id="addressfield" type="text" name="CurrentAddress" value="<?php echo e(old('CurrentAddress')); ?>">
                    <span>
                        <?php $__errorArgs = ['CurrentAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e('Current Address is required'); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </span>

                    <p><?php echo e(__('Student.Permanent Address')); ?></p>
                    <input id="addressfield" type="text" name="PermanentAddress" value="<?php echo e(old('PermanentAddress')); ?>">
                    <span>
                        <?php $__errorArgs = ['PermanentAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e('Permanent Address is required'); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </span>
                </div>


                <div class="country">
                    <div class="first">
                        <p><?php echo e(__('Basic.Country Name')); ?></p>
                        <select id="country-dd" name="CountryID">
                            <option value=""><?php echo e(__('Student.Select Country Name')); ?></option>
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($country->CountryID); ?>"><?php echo e($country->CountryName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                        <span>
                            <?php $__errorArgs = ['CountryID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please Select Country'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="second">
                        <p><?php echo e(__('Basic.Province Name')); ?></p>
                        <select id="province-dd" name="ProvinceID">
                            <option value=""><?php echo e(__('Basic.Select Province')); ?></option>
                            <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($province->ProvinceID); ?>"><?php echo e($province->ProvinceName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span>
                            <?php $__errorArgs = ['ProvinceID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please Select Province'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Basic.District Name')); ?></p>
                        <select id="district-dd" name="DistrictID">
                            <option value=""><?php echo e(__('Student.Select District')); ?></option>
                            <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($district->DistrictID); ?>"><?php echo e($district->DistrictName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span>
                            <?php $__errorArgs = ['DistrictID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please Select District'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                </div>

                <div class="session">
                    <div class="first">
                        <p><?php echo e(__('Student.Admission Session')); ?></p>
                        <select id="" name="SessionID">
                            <option value=""><?php echo e(__('Student.Select Session')); ?></option>
                            <?php $__currentLoopData = $sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($session->SessionID); ?>"><?php echo e($session->SessionTitle); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span>
                            <?php $__errorArgs = ['SessionID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please Select Session'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                    <div class="second">
                        <p><?php echo e(__('Student.Admission Date')); ?></p>
                        <input type="date" name="AdmissionDate" value="<?php echo e(old('AdmissionDate')); ?>">
                        <span>
                            <?php $__errorArgs = ['AdmissionDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Admission Date is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Student.Hajri Year')); ?></p>
                        <input type="text" name="HijriYear" value="<?php echo e(old('HijriYear')); ?>">
                        <span>
                            <?php $__errorArgs = ['HijriYear'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Hijri Year is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                </div>

                <div class="description">
                    <div class="first">
                        <p><?php echo e(__('Basic.Student Type')); ?></p>
                        <select id="" name="StudentTypeID">
                            <option value=""><?php echo e(__('Student.Select Student Type')); ?></option>
                            <?php $__currentLoopData = $studenttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studenttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($studenttype->StudentTypeID); ?>"><?php echo e($studenttype->StudentType); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                        <span>
                            <?php $__errorArgs = ['StudentTypeID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Student Type is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="second">
                        <p><?php echo e(__('Basic.Class Name')); ?></p>
                        <select id="" name="ClassID">
                            <option value=""><?php echo e(__('Student.Select Class')); ?></option>
                            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($class->ClassID); ?>"><?php echo e($class->ClassName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span>
                            <?php $__errorArgs = ['ClassID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please Select Class'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Basic.Section Name')); ?></p>
                        <select id="" name="SectionID">
                            <option value=""><?php echo e(__('Student.Select Section')); ?></option>
                            <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($section->SectionID); ?>"><?php echo e($section->SectionName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span>
                            <?php $__errorArgs = ['SectionID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please Select Section'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                </div>
                <div class="resident">
                    <div class="first">
                        <p><?php echo e(__('Student.Hostel Status')); ?></p>
                        <select id="" name="HostelStatus">
                            <option value=""><?php echo e(__('Student.Select Hostel Status')); ?></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <span>
                            <?php $__errorArgs = ['HostelStatus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Please select Hostel Status'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="second">
                        <p><?php echo e(__('Student.Previous Madrassa')); ?></p>
                        <input type="text" name="PreviousMadrasa" value="<?php echo e(old('PreviousMadrasa')); ?>">
                        <span>
                            <?php $__errorArgs = ['PreviousMadrasa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Previous Madrasa is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Student.Islamic Education')); ?></p>
                        <input type="text" name="IslamicEdu" value="<?php echo e(old('IslamicEdu')); ?>">
                        <span>
                            <?php $__errorArgs = ['IslamicEdu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Islamic Edu is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                </div>
                <div class="additionalability">
                    <div class="first">
                        <p><?php echo e(__('Student.Additional Education')); ?></p>
                        <input type="text" name="AddlEdu" value="<?php echo e(old('AddlEdu')); ?>">
                        <span>
                            <?php $__errorArgs = ['AddlEdu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Additional Edu is Required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="second">
                        <p><?php echo e(__('Student.Asri Education')); ?></p>
                        <input type="text" name="AsriEdu">
                        <span>
                            <?php $__errorArgs = ['AsriEdu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Asri Edu is Required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Student.Attached brother')); ?></p>
                        <input type="text" name="attachedbrother">
                    </div>

                </div>
                <div class="feediscount">
                    <div class="first">
                        <p><?php echo e(__('Student.Monthly Fee')); ?></p>
                        <input type="text" name="monthlyfee">
                    </div>
                    <div class="second">
                        <p><?php echo e(__('Student.Total Fee')); ?></p>
                        <input type="text" name="totalfee">
                    </div>
                    <div class="third">
                        <p><?php echo e(__('Student.DOSLC')); ?></p>
                        <input type="date" name="DOSLC" value="<?php echo e(old('DOSLC')); ?>">
                        <span>
                            <?php $__errorArgs = ['DOSLC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('DOSLC is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>

                </div>
                <div class="reason">
                    <div class="first">
                        <p><?php echo e(__('Student.Reason For DOSLC')); ?></p>
                        <input type="text" name="ReasonSLC" value="<?php echo e(old('ReasonSLC')); ?>">
                        <span>
                            <?php $__errorArgs = ['ReasonSLC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e('Reason SLC is required'); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </span>
                    </div>
                </div>

                <div class="buttons">
                    <button class="btn btn-primary" type="submit"><?php echo e(__('Student.Save')); ?></button>
                </div>


            </div>

            <div class="right">
                <div class="pic">
                    <img id="imagePreview" src="" alt="">
                </div>
                <input type="file" name="Image" onchange="previewImage()" id="imageInput">
                <span>
                    <?php $__errorArgs = ['Image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e('Image is Required'); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span>
            </div>
        </div>
    </div>
</form>
</div>
</body>
</html>

<script>

    $(document).ready(function() {
    $('#imageInput').on('change', function() {
        var file = $(this)[0].files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
            }

            reader.readAsDataURL(file);
        }
    });

    $('#country-dd').on('change', function () {
                var CountryID = this.value;
                $("#province-dd").html('');
                $.ajax({
                    url: "<?php echo e(url('api/fetch-states')); ?>",
                    type: "post",
                    data: {
                        CountryID: CountryID,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#province-dd').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#province-dd").append('<option value="' + value
                                .ProvinceID + '">' + value.ProvinceName + '</option>');
                        });
                    }
                });
            });
    $('#province-dd').on('change', function () {
                var ProvinceID = this.value;
                $("#district-dd").html('');
                $.ajax({
                    url: "<?php echo e(url('api/fetch-cities')); ?>",
                    type: "post",
                    data: {
                        ProvinceID: ProvinceID,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#district-dd').html('<option value="">Select District</option>');
                        $.each(result.cities, function (key, value) {
                            $("#district-dd").append('<option value="' + value
                                .DistrictID + '">' + value.DistrictName + '</option>');
                        });
                    }
                });
            });
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/student/create.blade.php ENDPATH**/ ?>