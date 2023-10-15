@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist',
])
@section('contents')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            <style>* {
                padding: 0px;
                margin: 0px;
            }

            .form {
                margin: 5%;
            }

            .formbody {
                display: flex;
            }

            .formbody .left {
                width: 80%;
            }

            .formbody .right {
                width: 20%;
                margin-left: 20px;
            }

            .pic {
                width: 55%;
                height: 180px;
                border: 1px solid black;
            }

            #imagePreview {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .right input {
                margin-top: 20px;
            }

            .name {
                display: flex;
                width: 100%;
                justify-content: space-between;
                margin-top: 10px;
            }

            .name div {
                width: 23%;
            }

            p {
                margin-bottom: 0px;
            }

            .name .first input {
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(238, 237, 237);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            }

            .name .second input {
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(238, 237, 237);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            }

            .name .third input {
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(238, 237, 237);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            }

            .name .fourth input {
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(238, 237, 237);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            }

            .address {
                display: flex;
                width: 100%;
                margin-top: 10px;
            }

            .address div {
                width: 49%;
            }

            p {
                margin-bottom: 0px;
            }

            .address .first input {
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(238, 237, 237);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            }

            .DOSLC {
                display: flex;
                width: 70%;
                justify-content: space-between;
                margin-top: 10px;
            }

            .DOSLC div {
                width: 48%;
                margin-right: 20px
            }

            p {
                margin-bottom: 0px;
            }

            .DOSLC .first input {
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(238, 237, 237);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            }

            .DOSLC .second input {
                width: 100%;
                height: 35px;
                border: none;
                background-color: rgb(238, 237, 237);
                padding-left: 8px;
                padding-right: 8px;
                border-radius: 4px;
                margin-right: 4px;
                margin-top: 10px;
            }

            .DOSLC .btn {
                margin-top: 8px;
            }
        </style>
    </head>

    <body>
        <div class="form">
            @if (session('success'))
                <div class="alert alert-danger">
                    {{ session('success') }}
                </div>
            @endif
            <h1>
                Struck OFF Student
            </h1>
            <hr>
            <div class="formbody">
                <div class="left">
                    <div class="name">
                        <div class="first">
                            <p>Enter Registration No</p>
                            <input type="text" name="RegistrationNo" id="RegistrationNo">
                        </div>
                        <div class="second">
                            <p>{{ __('Student.Student Name') }}</p>
                            <input type="text" name="StudentName" id="StudentName"">
                        </div>
                        <div class="third">
                            <p>Class</p>
                            <input type="text" name="Class" id="Class">
                        </div>
                        <div class="fourth">
                            <p>Section</p>
                            <input type="text" name="Section" id="Section">
                        </div>
                    </div>
                    <div class="name">
                        <div class="first">
                            <p>Session</p>
                            <input type="text" name="Session" id="Session">
                        </div>
                        <div class="second">
                            <p>Date of Birth</p>
                            <input type="text" name="DOB" id="DOB">
                        </div>
                        <div class="third">
                            <p>Contact No</p>
                            <input type="text" name="ContactNo" id="ContactNo">
                        </div>
                        <div class="fourth">
                            <p>Current Address</p>
                            <input type="text" name="CurrentAddress" id="CurrentAddress">
                        </div>
                    </div>
                    <div class="address">
                        <div class="first">
                            <p>Permanent Address</p>
                            <input type="text" name="PermanentAddress" id="PermanentAddress">
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="pic">
                        <img id="imagePreview" src="" alt="">
                    </div>
                    {{-- <input type="file" name="Image" onchange="previewImage()" id="imageInput"> --}}
                </div>
            </div>
            <hr>
            <form action="{{ route('StruckOffStudent') }}" method="POST">
                @csrf
                <div class="DOSLC">
                    <div class="first">
                        <p>Struck OFF Date</p>
                        <input type="date" name="DOSLC" id="DOSLC">
                    </div>
                    <div class="second">
                        <p>Reason</p>
                        <input type="text" name="ReasonSLC" id="Reason">
                        <input type="hidden" name="StudentID" id="StudentID">
                    </div>
                    <div class="btn">
                        <button class="btn btn-primary" type="submit"> Struck OFF</button>
                    </div>
                </div>
            </form>
        </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#RegistrationNo').keypress(function(event) {
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    var RegistrationNo = $('#RegistrationNo').val();
                    $.ajax({
                        url: "{{ url('api/fetch-students') }}",
                        type: "post",
                        data: {
                            RegistrationNo: RegistrationNo,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $.each(result.student, function(key, value) {
                                $('#StudentID').val(value.StudentID);
                                $('#StudentName').val(value.StudentName);
                                $('#Class').val(value.ClassName);
                                $('#Section').val(value.SectionName);
                                $('#Session').val(value.SessionTitle);
                                $('#DOB').val(value.DOB);
                                $('#ContactNo').val(value.FMobile);
                                $('#CurrentAddress').val(value.CurrentAddress);
                                $('#PermanentAddress').val(value.PermanentAddress);
                                var Image = value.Image;
                                $('#imagePreview').attr("src", 'images/' + value.Image);
                            });
                        }
                    });

                }
            });
        });
    </script>

    </html>
@endsection
