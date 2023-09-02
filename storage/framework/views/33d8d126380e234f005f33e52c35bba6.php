<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .tb{
            border-spacing: 0;
            border: 1px solid black;
        }
        .tb th{
            border: 1px solid black;
            background-color: rgb(228, 228, 228);
            font-weight: bold;
            padding: 10px;
            font-size: 15px;
        }
        .tb td{
            border: 1px solid black;
            padding: 10px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <center><h3>Mardrasa Anwar Ul Quran</h3></center>
    <p>Student Details: All Classes</p>
    <table class="tb">
        <tr>
            <th>Reg No</th>
            <th>Full Name</th>
            <th>CNIC</th>
            <th>Father Name</th>
            <th>Guardian Name</th>
            <th>Class</th>
            <th>Session</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($student->RegistrationNo); ?></td>
            <td><?php echo e($student->StudentName); ?></td>
            <td><?php echo e($student->SCNIC); ?></td>
            <td><?php echo e($student->FatherName); ?></td>
            <td><?php echo e($student->GuardianName); ?></td>
            <td><?php echo e($student->ClassName); ?></td>
            <td><?php echo e($student->SessionTitle); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/student/studentdata.blade.php ENDPATH**/ ?>