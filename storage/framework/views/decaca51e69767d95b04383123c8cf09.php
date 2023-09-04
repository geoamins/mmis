<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: poppins;
        }

        .form{
            width: 850;
            height: 1100;
        }
        .header{
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 110px;
        }
        .logo{
            width: 12%;
            height: 90px;
        }

        .logo img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .title{
            width: 60%;
        }
        .title p{
            font-size: 12px;
        }
        .img{
            width: 120px;
            height: 150px;
        }

        .img img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .admissionformtitle{
            height: 50px;
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 0px;
        }

        .admissionformtitle div{
            background-color: green;
            padding: 8px;
            height: 30px;
            width: 300px;
            color: white;
            border-radius: 4px
        }
        .personal{
            height: 20px;
            background-color: green;
            color: white;
            padding: 6px;
            margin-top: 10px;
        }
        .row1{
            display: flex;
            height: 40px;
            width: 100%;
        }
        .row1 .left{
            display: flex;
            width: 50%;
            height: 20px;
        }
        .row1 .left .name{
            width: 40%;
            height: 20px;
            background-color: green;
            color: white;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid green;

        }
        .row1 .left .data{
            width: 60%;
            height: 20px;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid green;
        }
        .row1 .right{
            display: flex;
            width: 50%;
            height: 20px;
        }
        .row1 .right .name{
            width: 40%;
            height: 20px;
            background-color: green;
            color: white;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid green;

        }
        .row1 .right .data{
            width: 60%;
            height: 20px;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid green;
        }

        .row5{
            display: flex;
            height: 40px;
            width: 100%;
        }
        .row5 .left{
            display: flex;
            width: 100%;
            height: 20px;
        }
        .row5 .left .name{
            width: 30%;
            height: 20px;
            background-color: green;
            color: white;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid green;

        }
        .row5 .left .data{
            width: 70%;
            height: 20px;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid green;
        }

        .signature{
            display: flex;
            justify-content: space-between;
            height: 40px;
            width: 100%;
            margin-top: 70px;
        }
        .signature .left{
            display: flex;
            width: 50%;
            height: 20px;
        }
        .signature .right{
            display: flex;
            justify-content: center;
            width: 30%;
            height: 20px;
            border-top: 1px solid green;
        }

        .main{
            display: flex;
        }

        .btn button{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="main">


        <div class="form">
            <div class="header">
                <div class="logo">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="">
                </div>
                <div class="title">
                    <h1>Madrasa Anwar Ul Quran</h1>
                    <p>Address: Village Post     Yarhussain Swabi Kpk</p>
                    <p>Affiliated With: Village Post office Yarhussain Swabi Kpk</p>
                </div>
                <div class="img">
                    <img src="<?php echo e(asset('images/'.$data->Image)); ?>" alt="">
                </div>
            </div>
            <div class="admissionformtitle">
                <div>
                    <center><h2>Admission Form</h2></center>
                </div>
            </div>
            <div class="personal">
                <p>Personal Information</p>
            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Registration No</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->RegistrationNo); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Full Name</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->StudentName); ?></p>
                    </div>
                </div>

            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>CNIC</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->SCNIC); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Date of Birth</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->DOB); ?></p>
                    </div>
                </div>

            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Gender</p>
                    </div>
                    <div class="data">
                    <?php if($data->GenderID == 1): ?>
                        <p>Male</p>
                    <?php elseif($data->GenderID == 2): ?>
                        <p>Female</p>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Father Name</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->FatherName); ?></p>
                    </div>
                </div>

            </div>

            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Father CNIC</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->FCNIC); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Father Mobile</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->FMobile); ?></p>
                    </div>
                </div>

            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>District</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->DistrictName); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Province</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->ProvinceName); ?></p>
                    </div>
                </div>

            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Country</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->CountryName); ?></p>
                    </div>
                </div>

            </div>

            <div class="row5">
                <div class="left">
                    <div class="name">
                        <p>Present Address</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->CurrentAddress); ?></p>
                    </div>
                </div>

            </div>
            <div class="row5">
                <div class="left">
                    <div class="name">
                        <p>Permanent Address</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->PermanentAddress); ?></p>
                    </div>
                </div>

            </div>
            <div class="personal">
                <p>Admission Information</p>
            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Admission Session</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->SessionTitle); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Admission Date</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->AdmissionDate); ?></p>
                    </div>
                </div>

            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Previous Madrasa</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->PreviousMadrasa); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Islamic Education</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->IslamicEdu); ?></p>
                    </div>
                </div>

            </div>

            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Asri Education</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->AsriEdu); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Additional Education</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->AddlEdu); ?></p>
                    </div>
                </div>

            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Hostel Resident</p>
                    </div>
                    <div class="data">
                        <?php if($data->HostelStatus == 0): ?>
                        <p>Non - Resident</p>
                    <?php elseif($data->HostelStatus == 1): ?>
                        <p>Resident</p>
                    <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="personal">
                <p>Guardian Information</p>
            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Guardian Name</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->GuardianName); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Relation</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->GuardianRelation); ?></p>
                    </div>
                </div>

            </div>
            <div class="signature">
                <div class="left">

                </div>
                <div class="right">
                    <center><p>Student Signature</p></center>
                </div>

            </div>

            <div class="personal">
                <p>Other Information (Office use only)</p>
            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Monthly Fee</p>
                    </div>
                    <div class="data">
                        <p>26000</p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Attached Brother</p>
                    </div>
                    <div class="data">
                        <p>Rizwan Sarwar</p>
                    </div>
                </div>

            </div>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Fee Discount</p>
                    </div>
                    <div class="data">
                        <p>26000</p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Total Fee</p>
                    </div>
                    <div class="data">
                        <p>Rizwan Sarwar</p>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <div class="row1">
                <div class="left">
                    <div class="name">
                        <p>Struckoff Date</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->DOSLC); ?></p>
                    </div>
                </div>
                <div class="right">
                    <div class="name">
                        <p>Struckoff Reason</p>
                    </div>
                    <div class="data">
                        <p><?php echo e($data->ReasonSLC); ?></p>
                    </div>
                </div>

            </div>

            <div class="signature">
                <div class="left">

                </div>
                <div class="right">
                    <center><p>Directer Signature</p></center>
                </div>

            </div>

        </div>
    </div>

</body>
<script>
</script>
</html>
<?php /**PATH /Users/rizwansarwar/Desktop/mmis/resources/views/student/studentformpdf.blade.php ENDPATH**/ ?>