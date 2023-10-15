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

        .pic img{
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

        /* .buttons button{
            width: 80px;
            height: 40px;
            border: none;
            border-radius: 4px;
            background-color: rgb(194, 193, 193);
            font-weight: bold;
            margin-left: 10px;
        } */
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
    <form action="{{route('student.update', $data->StudentID)}}" method="POST">
        {{csrf_field()}}
        {{method_field('put')}}
    <div class="form">
            <h1>
                {{ __('student.Update Student') }}
            </h1>
            <p> {{ __('student.Fill out the form carefully for registration') }}</p>
        <div class="formbody">
            <div class="left">

                <div class="name">
                    <div class="first">
                        <p>{{ __('student.Registration No') }}</p>
                        <input type="text" name="RegistrationNo" value="{{$data->RegistrationNo}}" >
                            @error('RegistrationNo')
                            <p class="text-danger">{{'Registration No is Required'}}</p>
                            @enderror

                    </div>
                    <div class="second">
                        <p>{{ __('student.Student Name') }}</p>
                        <input type="text" name="StudentName" value="{{$data->StudentName}}">
                        <span>
                            @error('StudentName')
                            <p class="text-danger">{{'Student Name is Required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>{{ __('student.CNIC') }}</p>
                        <input type="text" name="SCNIC" value="{{$data->SCNIC}}">
                        <span>
                            @error('SCNIC')
                            <p class="text-danger">{{'CNIC is required'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="registration">
                    <div class="first">
                        <p>{{ __('student.DOB') }}</p>
                        <input type="date" name="DOB" value="{{$data->DOB}}">
                        <span>
                            @error('DOB')
                            <p class="text-danger">{{'DOB is required'}}</p>
                            @enderror

                        </span>
                    </div>

                    <div class="second">
                        <p>{{ __('student.Gender') }}</p>
                        <select id="" name="GenderID">
                            <option value="{{$data->GenderID}}">{{$data->GenderID = 1 ? 'Male' : 'Female' }}</option>
                            @if ($data->GenderID = 1)
                            <option value="2">{{ __('student.Female') }}</option>
                            @else
                            <option value="1">{{ __('student.Male') }}</option>
                            @endif
                        </select>
                        <span>
                            @error('GenderID')
                            <p class="text-danger">{{ __('student.Select Gender') }}</p>
                            @enderror

                        </span>
                    </div>

                    <div class="third">
                        <p>{{ __('Basic.Department Name') }}</p>
                        <select id="" name="DeptID">
                            <option value="{{$data->DeptID}}">{{$data->DepartmentName}}</option>
                            @foreach ($departments as $department)
                            <option value="{{$department->DeptID}} ">{{$department->DepartmentName}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('DeptID')
                            <p class="text-danger">{{'Please select Department'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="age">
                    <div class="first">
                        <p>{{ __('student.Father Name') }}</p>
                        <input type="text" name="FatherName" value="{{$data->FatherName}}">
                        <span>
                            @error('FatherName')
                            <p class="text-danger">{{'Father Name is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>{{ __('student.Father CNIC') }}</p>
                        <input type="text" name="FCNIC" value="{{$data->FCNIC}}">
                        <span>
                            @error('FCNIC')
                            <p class="text-danger">{{'Father CNIC is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>{{ __('student.Guardian Name') }}</p>
                        <input type="text" name="GuardianName" value="{{$data->GuardianName}}">
                        <span>
                            @error('GuardianName')
                            <p class="text-danger">{{'Guardian Name is Required'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>

                <div class="contactno">
                    <div class="first">
                        <p>{{ __('student.Guardian Relation') }}</p>
                        <input type="text" name="GuardianRelation" value="{{$data->GuardianRelation}}">
                        <span>
                            @error('GuardianRelation')
                            <p class="text-danger">{{'Guardian Relation is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>{{ __('student.Father Mobile') }}</p>
                        <input type="text" name="FMobile" value="{{$data->FMobile}}">
                        <span>
                            @error('FMobile')
                            <p class="text-danger">{{'Father Mobile No is required'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>

                <div class="address">
                    <p>{{ __('student.Current Address') }}</p>
                    <input id="addressfield" type="text" name="CurrentAddress" value="{{$data->CurrentAddress}}">
                    <span>
                        @error('CurrentAddress')
                        <p class="text-danger">{{'Current Address is required'}}</p>
                        @enderror

                    </span>

                    <p>{{ __('student.Permanent Address') }}</p>
                    <input id="addressfield" type="text" name="PermanentAddress" value="{{$data->PermanentAddress}}">
                    <span>
                        @error('PermanentAddress')
                        <p class="text-danger">{{'Permanent Address is required'}}</p>
                        @enderror

                    </span>
                </div>


                <div class="country">
                    <div class="first">
                        <p>{{ __('Basic.Country Name') }}</p>
                        <select clas id="" name="CountryID">
                            <option value="{{$data->CountryID}}">{{$data->CountryName}}</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->CountryID}}">{{$country->CountryName}}</option>
                            @endforeach

                        </select>
                        <span>
                            @error('CountryID')
                            <p class="text-danger">{{'Please select Country'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>{{ __('Basic.Province Name') }}</p>
                        <select id="" name="ProvinceID">
                            <option value="{{$data->ProvinceID}}">{{$data->ProvinceName}}</option>
                            @foreach ($provinces as $province)
                            <option value="{{$province->ProvinceID}}">{{$province->ProvinceName}}</option>
                            @endforeach

                        </select>
                        <span>
                            @error('ProvinceID')
                            <p class="text-danger">{{'Please select Province'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>{{ __('Basic.District Name') }}</p>
                        <select id="" name="DistrictID">
                            <option value="{{$data->DistrictID}}">{{$data->DistrictName}}</option>
                            @foreach ($districts as $district)
                            <option value="{{$district->DistrictID}}">{{$district->DistrictName}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('DistrictID')
                            <p class="text-danger">{{'Please select District'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="session">
                    <div class="first">
                        <p>{{ __('student.Admission Session') }}</p>
                        <select id="" name="SessionID">
                            <option value="{{$data->SessionID}}">{{$data->SessionTitle}}</option>
                            @foreach ($sessions as $session)
                            <option value="{{$session->SessionID}}">{{$session->SessionTitle}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('SessionID')
                            <p class="text-danger">{{'Please select Session'}}</p>
                            @enderror

                        </span>
                    </div>

                    <div class="second">
                        <p>{{ __('student.Admission Date') }}</p>
                        <input type="date" name="AdmissionDate" value="{{$data->AdmissionDate}}">
                        <span>
                            @error('AdmissionDate')
                            <p class="text-danger">{{'Admission Date is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>{{ __('student.Hajri Year') }}</p>
                        <input type="text" name="HijriYear" value="{{$data->HijriYear}}">
                        <span>
                            @error('HijriYear')
                            <p class="text-danger">{{'Hijri Year is required'}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="description">
                    <div class="first">
                        <p>{{ __('Basic.Student Type') }}</p>
                        <select id="" name="StudentTypeID">
                            <option value="{{$data->StudentTypeID}}">{{$data->StudentType}}</option>
                            @foreach ($studenttypes as $studenttype)
                            <option value="{{$studenttype->StudentTypeID}}">{{$studenttype->StudentType}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('StudentTypeID')
                            <p class="text-danger">{{'Please select Student Type'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>{{ __('Basic.Class Name') }}</p>
                        <select id="" name="ClassID">
                            <option value="{{$data->ClassID}}">{{$data->ClassName}}</option>
                            @foreach ($classes as $class)
                            <option value="{{$class->ClassID}}">{{$class->ClassName}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('ClassID')
                            <p class="text-danger">{{'Please select Class'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>{{ __('Basic.Section Name') }}</p>
                        <select id="" name="SectionID">
                            <option value="{{$data->SectionID}}">{{$data->SectionName}}</option>
                            @foreach ($sections as $section)
                            <option value="{{$section->SectionID}}">{{$section->SectionName}}</option>
                            @endforeach
                        </select>
                        <span>
                            @error('SectionID')
                            <p class="text-danger">{{'Please select Section'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>
                <div class="resident">
                    <div class="first">
                        <p>{{ __('student.Hostel Status') }}</p>
                        <select id="" name="HostelStatus">
                            <option value="1">{{ __('student.Yes') }}</option>
                            <option value="0">{{ __('student.No') }}</option>
                        </select>
                        <span>
                            @error('HostelStatus')
                            <p class="text-danger">{{'Please select Hostel Status'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>{{ __('student.Previous Madrassa') }}</p>
                        <input type="text" name="PreviousMadrasa" value="{{$data->PreviousMadrasa}}">
                        <span>
                            @error('PreviousMadrasa')
                            <p class="text-danger">{{'Previous Madrasa is required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>{{ __('student.Islamic Education') }}</p>
                        <input type="text" name="IslamicEdu" value="{{$data->IslamicEdu}}">
                        <span>
                            @error('IslamicEdu')
                            <p class="text-danger">{{'Islamic Edu is required'}}</p>
                            @enderror

                        </span>
                    </div>

                </div>
                <div class="additionalability">
                    <div class="first">
                        <p>{{ __('student.Additional Education') }}</p>
                        <input type="text" name="AddlEdu" value="{{$data->AddlEdu}}">
                        <span>
                            @error('AddlEdu')
                            <p class="text-danger">{{'Additional Education is Required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="second">
                        <p>{{ __('student.Asri Education') }}</p>
                        <input type="text" name="AsriEdu" value="{{$data->AsriEdu}}">
                        <span>
                            @error('AsriEdu')
                            <p class="text-danger">{{'Asri Education is Required'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="third">
                        <p>{{ __('student.Attached brother') }}</p>
                        <input type="text" name="attachedbrother">
                        <span>
                            @error('attachedbrother')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </span>
                    </div>

                </div>
                <div class="feediscount">
                    <div class="first">
                        <p>{{ __('student.Monthly Fee') }}</p>
                        <input type="text" name="monthlyfee">
                        @error('feediscount')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="second">
                        <p>{{ __('student.Total Fee') }}</p>
                        <input type="text" name="totalfee">
                        @error('totalfee')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="third">
                        <p>{{ __('student.DOSLC') }}</p>
                        <input type="date" name="DOSLC" value="{{$data->DOSLC}}">
                        <span>
                            @error('DOSLC')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </span>
                    </div>

                </div>
                <div class="reason">
                    <div class="first">
                        <p>{{ __('student.Reason For DOSLC') }}</p>
                        <input type="text" name="ReasonSLC" value="{{$data->ReasonSLC}}">
                        <span>
                            @error('ReasonSLC')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </span>
                    </div>
                </div>

                <div class="buttons">
                    <button class="btn btn-primary" type="submit">{{ __('student.Save') }}</button>
                </div>


            </div>

            <div class="right">
                <div class="pic">
                    <img src="{{asset('images/'.$data->Image)}}" alt="">
                </div>
                <input type="file" name="Image">

            </div>
        </div>
    </div>
</form>
</div>
</body>
</html>
@endsection
