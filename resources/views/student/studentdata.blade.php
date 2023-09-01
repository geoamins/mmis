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
    <p>Student Details: All Class</p>
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
        @foreach ($data as $student)
        <tr>
            <td>{{$student->RegistrationNo}}</td>
            <td>{{$student->StudentName}}</td>
            <td>{{$student->SCNIC}}</td>
            <td>{{$student->FatherName}}</td>
            <td>{{$student->GuardianName}}</td>
            <td>{{$student->ClassName}}</td>
            <td>{{$student->SessionName}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
