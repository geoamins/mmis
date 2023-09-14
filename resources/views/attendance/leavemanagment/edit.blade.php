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

            .status {
                display: flex;
                width: 100%;
                justify-content: space-between;
                margin-top: 10px;
            }

            .status div {
                width: 23%;
            }

            .status .first select {
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
        </style>
    </head>

    <body>
        <div class="form">
            <dd>{{ $data }}</dd>
            <h1>
                Student Leave System
            </h1>
            <hr>
            <form id="leavform" action="{{ route('leave.update', $data->LeaveID) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="formbody">
                    <div class="left">
                        <div class="name">
                            <div class="first">
                                <p>Enter Registration No</p>
                                <input type="text" name="RegistrationNo" id="RegistrationNo"
                                    value="{{ $data->RegistrationNo }}" readonly>
                                <input type="hidden" name="StudentID" id="StudentID">
                            </div>
                            <div class="second">
                                <p>{{ __('Student.Student Name') }}</p>
                                <input type="text" name="StudentName" id="StudentName"" value="{{ $data->StudentName }}"
                                    readonly>
                            </div>
                            <div class="third">
                                <p>Class</p>
                                <input type="text" name="Class" id="Class" value="{{ $data->ClassName }}" readonly>
                            </div>
                            <div class="fourth">
                                <p>Section</p>
                                <input type="text" name="Section" id="Section" value="{{ $data->SectionName }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="name">
                            <div class="first">
                                <p>Father Name</p>
                                <input type="text" name="FatherName" id="FatherName" value="{{ $data->FatherName }}"
                                    readonly>
                            </div>
                            <div class="second">
                                <p>From Date</p>
                                <input type="date" name="FromDate" value="{{ $data->FromDate }}">
                            </div>
                            <div class="third">
                                <p>ToDate</p>
                                <input type="date" name="ToDate" value="{{ $data->ToDate }}">
                            </div>
                            <div class="fourth">
                                <p>Reason</p>
                                <input type="text" name="Reason" value="{{ $data->Reason }}">
                            </div>
                        </div>
                        <div class="status">
                            <div class="first">
                                <p>Status</p>
                                <select id="" name="Status">
                                    <option value="{{ $data->Status }}">{{ $data->Status }}</option>
                                    <option value="Pending">Select Status</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Not Approved">Not Approved</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary" type="submit">Update Leave</button>
                        </div>
                    </div>

                    <div class="right">
                        <div class="pic">
                            <img id="imagePreview" src="" alt="">
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </body>
    <script>
        // $(document).ready(function() {
        //     $('#search').click(function() {
        //         var RegistrationNo = $('#RegNo').val();
        //             $.ajax({
        //                 url: "{{ url('api/fetch-students') }}",
        //                 type: "post",
        //                 data: {
        //                     RegistrationNo: RegistrationNo,
        //                     _token: '{{ csrf_token() }}'
        //                 },
        //                 dataType: 'json',
        //                 success: function(result) {
        //                     $.each(result.student, function(key, value) {
        //                         $('#StudentID').val(value.StudentID);
        //                         $('#RegistrationNo').val(value.RegistrationNo);
        //                         $('#StudentName').val(value.StudentName);
        //                         $('#Class').val(value.ClassName);
        //                         $('#Section').val(value.SectionName);
        //                         $('#FatherName').val(value.FatherName);
        //                         var Image = value.Image;
        //                         $('#imagePreview').attr("src", 'images/' + value.Image);
        //                     });
        //                 }
        //             });
        //     });
        // });
    </script>

    </html>
@endsection
