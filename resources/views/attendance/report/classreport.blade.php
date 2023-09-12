<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table {
            border-spacing: 0px;
        }

        .table th {
            padding: 10px;
            border: 1px solid black;
            background-color: black;
            color: white;
            font-weight: bold;
        }

        .table td {
            padding-left: 10px;
            padding-right: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Monthly Attendance Report</h1>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Class Name</th>
                <th>Section Name</th>
                <th>Present Count</th>
                <th>Absent Count</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Report as $record)
                <tr>
                    <td>{{ $record->date }}</td>
                    <td>{{ $class->ClassName }}</td>
                    <td>{{ $section->SectionName }}</td>
                    <td>{{ $record->present_count }}</td>
                    <td>{{ $record->absent_count }}</td>
                    <td>{{ $record->present_count -  $record->absent_count}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
