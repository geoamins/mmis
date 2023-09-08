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

            .idcard {
                display: flex;
                justify-content: space-evenly;
            }

            .front {
                width: 2in;
                height: 3.5in;
                border: .1px solid black;
                border-radius: 4px;
                background-image: url({{ asset('images/IDCard.png') }});
                background-size: cover;
            }

            .image {
                width: .67in;
                height: .82in;
                margin-top: .85in;
                margin-left: .71in;
            }

            .image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .idcardname {
                margin-top: 5px;
                color: black;
                font-family: poppins;
            }

            .idcardname center p {
                font-weight: bold;
                font-size: 15px
            }

            .idcarddata {
                display: flex;
                margin: 8px;
                margin-top: 2px;
                color: black;
            }

            .idcarddata .idcardname {
                margin-top: 0;
                width: 40%;
            }

            .idcarddata .idcardname p {
                font-size: 10px;
                font-weight: bold;
            }

            .idcarddata .data {
                width: 60%;
            }

            .idcarddata .data p {
                font-size: 10px;
            }

            .back {
                width: 2in;
                height: 3.5in;
                border: .1px solid black;
                border-radius: 4px;
                background-image: url({{ asset('images/IDCardBack.png') }});
                background-size: cover;
            }

            .idcarddataback {
                display: flex;
                margin: 8px;
                margin-top: 90px;
                color: black;
                font-family: poppins;
            }

            .idcarddataback .idcardbackname {
                margin-top: 0;
                width: 40%;
            }

            .idcarddataback .idcardbackname p {
                font-size: 10px;
                font-weight: bold;
            }

            .idcarddataback .data {
                width: 60%;
            }

            .idcarddataback .data p {
                font-size: 10px;
            }
        </style>
    </head>

    <body>
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <h1>
                    Card Generater
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
                <div class="idcard">
                    <div class="front" id="frontcard">
                        <div class="image" id="image">
                            <img id="cardimage" src="" alt="">
                        </div>
                        <div class="idcardname">
                            <center>
                                <p id="studentname">_______</p>
                            </center>
                        </div>
                        <div class="idcarddata">
                            <div class="idcardname">
                                <p>ID No</p>
                                <p>Father Name</p>
                                <p>Class</p>
                                <p>Section</p>
                                <p>Session</p>
                                <p>DOB</p>
                            </div>
                            <div class="data">
                                <p id="idno"><b>:</b></p>
                                <p id="fathername"><b>:</b></p>
                                <p id="class"><b>:</b></p>
                                <p id="section"><b>:</b></p>
                                <p id="session"><b>:</b></p>
                                <p id="dob"><b>:</b></p>
                            </div>
                        </div>

                    </div>

                    <div class="back">
                        <div class="idcarddataback">
                            <div class="idcardbackname">
                                <p>Validity</p>
                                <p>Contact</p>
                                <p>Present Address</p>
                                <p>Permanent Address</p>
                            </div>
                            <div class="data">
                                <p id="validity"><b>: </b></p>
                                <p id="contact"><b>: </b></p>
                                <p id="currentaddress"><b>: </b></p>
                                <p id="permanentaddress"><b>: </b></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </form>
        {{-- <button onclick="printDiv('frontcard')">form</button> --}}
    </body>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).outerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

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

                                $('#studentname').html('<p>' + value.StudentName +
                                    '</p>');
                                $('#idno').html('<p><b>: </b>' + value.RegistrationNo +
                                    '</p>');
                                $('#fathername').html('<p><b>: </b>' + value
                                    .FatherName + '</p>');
                                $('#class').html('<p><b>: </b>' + value.ClassName +
                                    '</p>');
                                $('#section').html('<p><b>: </b>' + value.SectionName +
                                    '</p>');
                                $('#session').html('<p><b>: </b>' + value.SessionTitle +
                                    '</p>');
                                $('#dob').html('<p><b>: </b>' + value.DOB + '</p>');
                                $('#validity').html('<p><b>: </b>10-08-2025</p>');
                                $('#contact').html('<p><b>: </b>' + value.FMobile +
                                    '</p>');
                                $('#currentaddress').html('<p><b>: </b>' + value
                                    .CurrentAddress + '</p>');
                                $('#permanentaddress').html('<p><b>: </b>' + value
                                    .PermanentAddress + '</p>');
                                $('#permanentaddress').html('<p><b>: </b>' + value
                                    .PermanentAddress + '</p>');
                                $('#cardimage').attr("src", 'images/' + value.Image);
                            });
                        }
                    });

                }
            });
        });
    </script>

    </html>
@endsection
