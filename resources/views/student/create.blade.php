@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')
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
            /* font-family: poppins; */
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
            /* background-color: aqua; */
        }
        .formbody .right{
            width: 20%;
            /* height: 200px;
            background-color: aliceblue; */
        }

        .pic{
            width: 55%;
            height: 180px;
            border: 1px solid black;
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
            background-color: rgb(232, 231, 231);
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
    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form">
            <h1>
                Registration Form
            </h1>
            <p> Fill out the form carefully for registration</p>
        <div class="formbody">
            <div class="left">

                <div class="name">
                    <div class="first">
                        <p>Registration No</p>
                        <input type="text" name="RegistrationNo" value="{{old('RegistrationNo')}}">
                            @error('RegistrationNo')
                            <p class="text-danger">{{'Registration No is Required'}}</p>
                            @enderror

                    </div>
                    <div class="second">
                        <p>Student Name</p>
                        <input type="text" name="StudentName" value="{{old('StudentName')}}">
                        <span>
                            @error('StudentName')
                            <p class="text-danger">{{'Student name is Required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>CNIC</p>
                        <input type="text" name="SCNIC" value="{{old('SCNIC')}}">
                        <span>
                            @error('SCNIC')
                            <p class="text-danger">{{'Student CNIC is Required'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="registration">
                    <div class="first">
                        <p>DOB</p>
                        <input type="date" name="DOB" value="{{old('DOB')}}">
                        <span>
                            @error('DOB')
                            <p class="text-danger">{{'DOB is Required'}}</p>
                            @enderror

                        </span>
                    </div>

                    <div class="second">
                        <p>Gender</p>
                        <select id="" name="GenderID">
                            <option value="">Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        <span>
                            @error('GenderID')
                            <p class="text-danger">{{'Please select gender'}}</p>
                            @enderror

                        </span>
                    </div>

                    <div class="third">
                        <p>Department</p>
                        <select id="" name="DeptID">
                            <option value="">Select Dept</option>
                            @foreach ($departments as $department)
                            <option value="{{$department->DeptID}}">{{$department->DepartmentName}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('DeptID')
                            <p class="text-danger">{{'Please select department'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="age">
                    <div class="first">
                        <p>Father Name</p>
                        <input type="text" name="FatherName" value="{{old('FatherName')}}">
                        <span>
                            @error('FatherName')
                            <p class="text-danger">{{'Father Name is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>Father CNIC</p>
                        <input type="text" name="FCNIC" value="{{old('FCNIC')}}">
                        <span>
                            @error('FCNIC')
                            <p class="text-danger">{{'Father CNIC is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>Guardian Name</p>
                        <input type="text" name="GuardianName" value="{{old('GuardianName')}}">
                        <span>
                            @error('GuardianName')
                            <p class="text-danger">{{'Guardian Name is required'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>

                <div class="contactno">
                    <div class="first">
                        <p>Guardian Relation</p>
                        <input type="text" name="GuardianRelation" value="{{old('GuardianRelation')}}">
                        <span>
                            @error('GuardianRelation')
                            <p class="text-danger">{{'Guardian Relation is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>Father Mobile</p>
                        <input type="text" name="FMobile" value="{{old('FMobile')}}">
                        <span>
                            @error('FMobile')
                            <p class="text-danger">{{'Father Mobile No is requiresd'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>

                <div class="address">
                    <p>Current Address</p>
                    <input id="addressfield" type="text" name="CurrentAddress" value="{{old('CurrentAddress')}}">
                    <span>
                        @error('CurrentAddress')
                        <p class="text-danger">{{'Current Address is required'}}</p>
                        @enderror

                    </span>

                    <p>Permanent Address</p>
                    <input id="addressfield" type="text" name="PermanentAddress" value="{{old('PermanentAddress')}}">
                    <span>
                        @error('PermanentAddress')
                        <p class="text-danger">{{'Permanent Address is required'}}</p>
                        @enderror

                    </span>
                </div>


                <div class="country">
                    <div class="first">
                        <p>Country</p>
                        <select clas id="Country" name="CountryID">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->CountryID}}">{{$country->CountryName}}</option>
                            @endforeach

                        </select>
                        <span>
                            @error('CountryID')
                            <p class="text-danger">{{'Please Select Country'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>Province</p>
                        <select id="Province" name="ProvinceID">
                            <option value="">Select Province</option>
                            @foreach ($provinces as $province)
                            <option value="{{$province->ProvinceID}}">{{$province->ProvinceName}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('ProvinceID')
                            <p class="text-danger">{{'Please Select Province'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>District</p>
                        <select id="District" name="DistrictID">
                            <option value="">Select District</option>
                            @foreach ($districts as $district)
                            <option value="{{$district->DistrictID}}">{{$district->DistrictName}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('DistrictID')
                            <p class="text-danger">{{'Please Select District'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="session">
                    <div class="first">
                        <p>Admission Session</p>
                        <select id="" name="SessionID">
                            <option value="">Select Session</option>
                            @foreach ($sessions as $session)
                            <option value="{{$session->SessionID}}">{{$session->SessionTitle}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('SessionID')
                            <p class="text-danger">{{'Please Select Session'}}</p>
                            @enderror

                        </span>
                    </div>

                    <div class="second">
                        <p>Admission Date</p>
                        <input type="date" name="AdmissionDate" value="{{old('AdmissionDate')}}">
                        <span>
                            @error('AdmissionDate')
                            <p class="text-danger">{{'Admission Date is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>Hajri Year</p>
                        <input type="text" name="HijriYear" value="{{old('HijriYear')}}">
                        <span>
                            @error('HijriYear')
                            <p class="text-danger">{{'Hijri Year is required'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="description">
                    <div class="first">
                        <p>Student Type</p>
                        <select id="" name="StudentTypeID">
                            <option value="">Select Student Type</option>
                            @foreach ($studenttypes as $studenttype)
                            <option value="{{$studenttype->StudentTypeID}}">{{$studenttype->StudentType}}</option>
                            @endforeach

                        </select>
                        <span>
                            @error('StudentTypeID')
                            <p class="text-danger">{{'Student Type is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>Class</p>
                        <select id="" name="ClassID">
                            <option value="">Select Class</option>
                            <option value="1">New Addmission</option>
                            <option value="2">Promotion</option>
                        </select>
                        <span>
                            @error('ClassID')
                            <p class="text-danger">{{'Please Select Class'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>Section</p>
                        <select id="" name="SectionID">
                            <option value="">Select Section</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>
                        <span>
                            @error('SectionID')
                            <p class="text-danger">{{'Please Select Section'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>
                <div class="resident">
                    <div class="first">
                        <p>Hostel Status</p>
                        <select id="" name="HostelStatus">
                            <option value="">Hostel Status</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <span>
                            @error('HostelStatus')
                            <p class="text-danger">{{'Please select Hostel Status'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>Previous Madrassa</p>
                        <input type="text" name="PreviousMadrasa" value="{{old('PreviousMadrasa')}}">
                        <span>
                            @error('PreviousMadrasa')
                            <p class="text-danger">{{'Previous Madrasa is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>Islamic Education</p>
                        <input type="text" name="IslamicEdu" value="{{old('IslamicEdu')}}">
                        <span>
                            @error('IslamicEdu')
                            <p class="text-danger">{{'Islamic Edu is required'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>
                <div class="additionalability">
                    <div class="first">
                        <p>Additional Education</p>
                        <input type="text" name="AddlEdu" value="{{old('AddlEdu')}}">
                        <span>
                            @error('AddlEdu')
                            <p class="text-danger">{{'Additional Edu is Required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>Monthly Fees</p>
                        <input type="text" name="monthlyfee">
                    </div>
                    <div class="third">
                        <p>Attached brother</p>
                        <input type="text" name="attachedbrother">
                    </div>

                </div>
                <div class="feediscount">
                    <div class="first">
                        <p>Fee Discount</p>
                        <input type="text" name="feediscount">
                    </div>
                    <div class="second">
                        <p>Total Fee</p>
                        <input type="text" name="totalfee">
                    </div>
                    <div class="third">
                        <p>DOSLC</p>
                        <input type="date" name="DOSLC" value="{{old('DOSLC')}}">
                        <span>
                            @error('DOSLC')
                            <p class="text-danger">{{'DOSLC is required'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>
                <div class="reason">
                    <div class="first">
                        <p>Reason For DOSLC</p>
                        <input type="text" name="ReasonSLC" value="{{old('ReasonSLC')}}">
                        <span>
                            @error('ReasonSLC')
                            <p class="text-danger">{{'Reason SLC is required'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Save Data</button>
                </div>


            </div>

            <div class="right">
                <div class="pic">
                    <center>Picture Here</center>
                </div>
                <input type="file" name="Image">

            </div>
        </div>
    </div>
</form>
</div>
</body>
</html>

<script>
$(document).ready(function(){
    $('#Country').change(function(){
        let CountryID = $(this).val();
        $.ajax({
            url: '/getProvinces',
            type: 'post',
            data: 'CountryID='+CountryID+
            '&_token={{csrf_token()}}'
            success: function(result){
                $('#Province').html(result)
            }
        })
    })
})
</script>

@endsection
