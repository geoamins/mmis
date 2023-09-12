<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .page{
            width: 850px;
            height: 1100px;
        }
        .info{
            padding: 20px;
        }

        .info .left{
            font-weight: bold;
            font-size: 16px;
        }
        .info .left p{
            padding-bottom: 5px;
        }
        .table {
            border-spacing: 0px;
        }

        .table th {
            padding: 10px;
            border: 1px solid black;
            background-color: rgb(142, 142, 142);
            font-weight: bold;
        }
        .lastrow {
            background-color: rgb(231, 231, 231);
            font-weight: bold;
        }

        .table td {
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="page">
        <center><h2>Monthly Attendance Card</h2></center>
        <div class="info">
            <div class="left">
                <p>Date: {{now()}}</p>
                <p>Name:  {{$student->StudentName}}</p>
                <p>Father Name:  {{$student->FatherName}}</p>
                <p>Month: </p>
            </div>
            <div class="right">

            </div>
        </div>
    <table id="myTable" class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Present/Absent</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $presentCount = 0;
                $absentCount = 0;
            @endphp

            @foreach ($studentMonthlyReport as $record)
                <tr>
                    <td>{{ $record->date }}</td>
                    <td>{{ $student->StudentName }}</td>
                    <td>{{ $student->FatherName }}</td>
                    <td>{{ $student->ClassName }}</td>
                    <td>{{ $student->SectionName }}</td>
                    <td>{{ $record->status }}</td>
                        @if ($record->status === 'P')
                            <td>Present</td>
                        @elseif($record->status === 'A')
                            <td>Absent</td>
                        @endif
                </tr>

                @if ($record->status === 'P')
                    @php
                        $presentCount++;
                    @endphp
                @elseif($record->status === 'A')
                    @php
                        $absentCount++;
                    @endphp
                @endif
            @endforeach
            <tr class="lastrow">
                <td>Total Classes</td>
                <td>{{ $studentMonthlyReport->count() }}</td>
                <td>Present Classes</td>
                <td>{{ $presentCount }}</td>
                <td>Absent Classes</td>
                <td>{{ $absentCount }}</td>
                <td>{{ $presentCount/$studentMonthlyReport->count() * 100 }}%</td>
            </tr>
        </tbody>
    </table>
    <div class="info">
        <div class="left">
            <p><u>Summary</u></p>
            <p>Total Classes: {{ $studentMonthlyReport->count() }}</p>
            <p>Total Present Classes: {{ $presentCount }}</p>
            <p>Total Absent Classes: {{ $absentCount }}</p>
            <p>Percentage of Classes: {{ $presentCount/$studentMonthlyReport->count() * 100 }}%</p>
            <p></p>
        </div>
        <div class="right">

        </div>
    </div>
    </div>
</body>

</html>
