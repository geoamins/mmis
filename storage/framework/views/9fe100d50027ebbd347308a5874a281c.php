<?php $__env->startSection('contents'); ?>

<html lang="en">
<head>
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .main{
            margin: 5%;
        }
        .profile{
            display: flex;
            width: 100%;
            /* height: 300px; */
            margin-top: 20px;
        }
        .profile .left{
            text-align: center;
            width: 10%;
            height: 120px;
            border: 1px solid black;
            margin: 20px;
        }
        .profile .right{
            display: flex;
            width: 100%;
            height: 100%;
            margin: 20px;
        }

        .profile .right .rleft{
            width: 50%;
        }
        .rleft p{
            margin-bottom: 15px;
        }
        .rright p{
            margin-bottom: 15px;
        }

        .admissiondetail{
            display: flex;
            width: 100%;
            /* height: 300px; */
            margin-top: 20px;
        }
        .admissiondetail .left{
            text-align: center;
            width: 10%;
            height: 150px;
            /* border: 1px solid black; */
            margin: 20px;
        }
        .admissiondetail .right{
            display: flex;
            width: 100%;
            height: 100%;
            margin: 20px;
        }

        .admissiondetail .right .rleft{
            width: 50%;
        }
        .admissiondetail .rleft p{
            margin-bottom: 15px;
        }
        .admissiondetail .rright p{
            margin-bottom: 15px;
        }


        .guardiandetail{
            display: flex;
            width: 100%;
            /* height: 300px; */
            margin-top: 20px;
        }
        .guardiandetail .left{
            text-align: center;
            width: 10%;
            height: 150px;
            /* border: 1px solid black; */
            margin: 20px;
        }
        .guardiandetail .right{
            display: flex;
            width: 100%;
            height: 100%;
            margin: 20px;
        }

        .guardiandetail .right .rleft{
            width: 50%;
        }
        .guardiandetail .rleft p{
            margin-bottom: 15px;
        }
        .guardiandetail .rright p{
            margin-bottom: 15px;
        }

        .otherdetail{
            display: flex;
            width: 100%;
            /* height: 300px; */
            margin-top: 20px;
        }
        .otherdetail .left{
            text-align: center;
            height: 150px;
            /* border: 1px solid black; */
            margin: 20px;
        }
        .otherdetail .right{
            display: flex;
            width: 100%;
            height: 100%;
            margin: 20px;
        }

        .otherdetail .right .rleft{
            width: 50%;
        }
        .otherdetail .rleft p{
            margin-bottom: 15px;
        }
        .otherdetail .rright p{
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1>Student Detail</h1>
        <p>You can update if following detail have any error</p>
        <hr>
        <div class="profile">
            <div class="left">
                <p>Profile Pic</p>
            </div>
            <div class="right">
                <div class="rleft">
                   <h5>Registration No</h5>
                    <p><?php echo e($data->RegistrationNo); ?></p>
                    <h5>Student CNIC</h5>
                    <p><?php echo e($data->SCNIC); ?></p>
                    <h5>Gender</h5>
                    <?php if($data->GenderID == 1): ?>
                        <p>Male</p>
                    <?php elseif($data->GenderID == 2): ?>
                        <p>Female</p>
                    <?php endif; ?>
                    <h5>Father Name</h5>
                    <p><?php echo e($data->FatherName); ?></p>
                    <h5>Father Mobile</h5>
                    <p><?php echo e($data->FMobile); ?></p>
                    <h5>Permanent Address</h5>
                    <p><?php echo e($data->PermanentAddress); ?></p>
                    <h5>Province</h5>
                    <p><?php echo e($data->ProvinceName); ?></p>
                </div>
                <div class="rright">
                    <h5>Full Name</h5>
                    <p><?php echo e($data->StudentName); ?></p>
                    <h5>Date of Birth</h5>
                    <p><?php echo e($data->DOB); ?></p>
                    <h5>Department</h5>
                    <p><?php echo e($data->DepartmentName); ?></p>
                    <h5>Father CNIC</h5>
                    <p><?php echo e($data->FCNIC); ?></p>
                    <h5>Current Address</h5>
                    <p><?php echo e($data->CurrentAddress); ?></p>
                    <h5>Country</h5>
                    <p><?php echo e($data->CountryName); ?></p>
                    <h5>District</h5>
                    <p><?php echo e($data->DistrictName); ?></p>



                </div>
            </div>
        </div>

        <hr>

        <div class="admissiondetail">
            <div class="left">
                <h2>Admission Detail</h2>
            </div>
            <div class="right">
                <div class="rleft">
                    <h5>Admission Session</h5>
                    <p><?php echo e($data->SessionTitle); ?></p>
                    <h5>Hijri Year</h5>
                    <p><?php echo e($data->HijriYear); ?></p>
                    <h5>Class</h5>
                    <p><?php echo e($data->ClassID); ?></p>
                    <h5>Previous Madrasa</h5>
                    <p><?php echo e($data->PreviousMadrasa); ?></p>
                    <h5>Asri Education</h5>
                    <p><?php echo e($data->AsriEdu); ?></p>
                    <h5>Hostel Status</h5>
                    <?php if($data->HostelStatus == 1): ?>
                        <p>Resident</p>
                    <?php elseif($data->HostelStatus == 0): ?>
                        <p>Non Resident</p>
                    <?php endif; ?>
                </div>
                <div class="rright">
                    <h5>Admission Date</h5>
                    <p><?php echo e($data->AdmissionDate); ?></p>
                    <h5>Student Type</h5>
                    <p><?php echo e($data->StudentType); ?></p>
                    <h5>Section</h5>
                    <p><?php echo e($data->SectionID); ?></p>
                    <h5>Islamic Education</h5>
                    <p><?php echo e($data->IslamicEdu); ?></p>
                    <h5>Addition Education</h5>
                    <p><?php echo e($data->AddlEdu); ?></p>

                </div>
            </div>
        </div>
        <hr>
        <div class="guardiandetail">
            <div class="left">
                <h2>Guardian Detail</h2>
            </div>
            <div class="right">
                <div class="rleft">
                    <h5>Father Name</h5>
                    <p><?php echo e($data->FatherName); ?></p>
                    <h5>Guardian Name</h5>
                    <p><?php echo e($data->GuardianName); ?></p>
                </div>
                <div class="rright">
                    <h5>Father CNIC</h5>
                    <p><?php echo e($data->FCNIC); ?></p>
                    <h5>Relation with Guardian</h5>
                    <p><?php echo e($data->GuardianRelation); ?></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="otherdetail">
            <div class="left">
                <h2>Other Detail</h2>
            </div>
            <div class="right">
                <div class="rleft">
                    <h5>Monthly Fee</h5>
                    <p><?php echo e($data->StudentName); ?></p>
                    <h5>Fee Discount</h5>
                    <p><?php echo e($data->StudentName); ?></p>
                    <h5>Struck Off Date</h5>
                    <p><?php echo e($data->DOSLC); ?></p>
                </div>
                <div class="rright">
                    <h5>Attached Brother</h5>
                    <p><?php echo e($data->StudentName); ?></p>
                    <h5>Total Fee</h5>
                    <p><?php echo e($data->StudentName); ?></p>
                    <h5>Struck Off Reason</h5>
                    <p><?php echo e($data->ReasonSLC); ?></p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/student/view.blade.php ENDPATH**/ ?>