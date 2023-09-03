@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

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
            height: 135px;
            /* border: 1px solid black; */
            margin: 20px;
        }
        .left img{
            width: 100%;
            height: 100%;
            object-fit: cover;
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
            width: 10%;
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

        .btnheader{
            display: flex;
            justify-content: space-between;
        }

        .btnheader button{
            width: 90px;
            height: 45px;
            border: none;
            background-color: green;
            color: white;
            font-weight: bold;
        }

        .btnheader button a{
            color: white;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="btnheader">
            <h1>Student Detail</h1>
            <div class="buttons">
                <button><a href="{{route('StudentPDFForm', $data->StudentID)}}">Print Form</a></button>
                <button><a href="{{route('StudentIDCard', $data->StudentID)}}">Print Card</a></button>
            </div>
        </div>
        <p>You can update if following detail have any error</p>
        <hr>
        <div class="profile">
            <div class="left">
                <img src="{{asset('images/'.$data->Image)}}" alt="">
            </div>
            <div class="right">
                <div class="rleft">
                   <h5>{{ __('student.Registration No') }}</h5>
                    <p>{{$data->RegistrationNo}}</p>
                    <h5>{{ __('student.CNIC') }}</h5>
                    <p>{{$data->SCNIC}}</p>
                    <h5>{{ __('student.Gender') }}</h5>
                    @if ($data->GenderID == 1)
                        <p>{{ __('student.Male') }}</p>
                    @elseif($data->GenderID == 2)
                        <p>{{ __('student.Female') }}</p>
                    @endif
                    <h5>{{ __('student.Father Name') }}</h5>
                    <p>{{$data->FatherName}}</p>
                    <h5>{{ __('student.Father Mobile') }}</h5>
                    <p>{{$data->FMobile}}</p>
                    <h5>{{ __('student.Permanent Address') }}</h5>
                    <p>{{$data->PermanentAddress}}</p>
                    <h5>{{ __('Basic.Province Name') }}</h5>
                    <p>{{$data->ProvinceName}}</p>
                </div>
                <div class="rright">
                    <h5>{{ __('student.Full Name') }}</h5>
                    <p>{{$data->StudentName}}</p>
                    <h5>{{ __('student.DOB') }}</h5>
                    <p>{{$data->DOB}}</p>
                    <h5>{{ __('Basic.Department Name') }}</h5>
                    <p>{{$data->DepartmentName}}</p>
                    <h5>{{ __('student.Father CNIC') }}</h5>
                    <p>{{$data->FCNIC}}</p>
                    <h5>{{ __('student.Current Address') }}</h5>
                    <p>{{$data->CurrentAddress}}</p>
                    <h5>{{ __('Basic.Country Name') }}</h5>
                    <p>{{$data->CountryName}}</p>
                    <h5>{{ __('Basic.District Name') }}</h5>
                    <p>{{$data->DistrictName}}</p>



                </div>
            </div>
        </div>

        <hr>

        <div class="admissiondetail">
            <div class="left">
                <h2>{{ __('student.Admission Detail') }}</h2>
            </div>
            <div class="right">
                <div class="rleft">
                    <h5>{{ __('student.Admission Session') }}</h5>
                    <p>{{$data->SessionTitle}}</p>
                    <h5>{{ __('student.Hajri Year') }}</h5>
                    <p>{{$data->HijriYear}}</p>
                    <h5>{{ __('Basic.Class Name') }}</h5>
                    <p>{{$data->ClassName}}</p>
                    <h5>{{ __('student.Previous Madrassa') }}</h5>
                    <p>{{$data->PreviousMadrasa}}</p>
                    <h5>{{ __('student.Asri Education') }}</h5>
                    <p>{{$data->AsriEdu}}</p>
                    <h5>{{ __('student.Hostel Status') }}</h5>
                    @if ($data->HostelStatus == 1)
                        <p>{{ __('student.Resident') }}</p>
                    @elseif($data->HostelStatus == 0)
                        <p>{{ __('student.Non Resident') }}</p>
                    @endif
                </div>
                <div class="rright">
                    <h5>{{ __('student.Admission Date') }}</h5>
                    <p>{{$data->AdmissionDate}}</p>
                    <h5>{{ __('Basic.Student Type') }}</h5>
                    <p>{{$data->StudentType}}</p>
                    <h5>{{ __('Basic.Section Name') }}</h5>
                    <p>{{$data->SectionName}}</p>
                    <h5>{{ __('student.Islamic Education') }}</h5>
                    <p>{{$data->IslamicEdu}}</p>
                    <h5>{{ __('student.Additional Education') }}</h5>
                    <p>{{$data->AddlEdu}}</p>

                </div>
            </div>
        </div>
        <hr>
        <div class="guardiandetail">
            <div class="left">
                <h2>{{ __('student.Guardian Detail') }}</h2>
            </div>
            <div class="right">
                <div class="rleft">
                    <h5>{{ __('student.Father Name') }}</h5>
                    <p>{{$data->FatherName}}</p>
                    <h5>{{ __('student.Guardian Name') }}</h5>
                    <p>{{$data->GuardianName}}</p>
                </div>
                <div class="rright">
                    <h5>{{ __('student.Father CNIC') }}</h5>
                    <p>{{$data->FCNIC  }}</p>
                    <h5>{{ __('student.Guardian Relation') }}</h5>
                    <p>{{$data->GuardianRelation}}</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="otherdetail">
            <div class="left">
                <h2>{{ __('student.Other Detail') }}</h2>
            </div>
            <div class="right">
                <div class="rleft">
                    <h5>{{ __('student.Monthly Fee') }}</h5>
                    <p>{{$data->StudentName}}</p>
                    <h5>{{ __('student.Fee Discount') }}</h5>
                    <p>{{$data->StudentName}}</p>
                    <h5>{{ __('student.Struck Off Date') }}</h5>
                    <p>{{$data->DOSLC}}</p>
                </div>
                <div class="rright">
                    <h5>{{ __('student.Attached brother') }}</h5>
                    <p>{{$data->StudentName}}</p>
                    <h5>{{ __('student.Total Fee') }}</h5>
                    <p>{{$data->StudentName}}</p>
                    <h5>{{ __('student.Struck Off Reason') }}</h5>
                    <p>{{$data->ReasonSLC}}</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

@endsection
