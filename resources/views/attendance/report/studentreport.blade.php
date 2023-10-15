<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        .page {
            width: 900px;
            height: 1100px;
        }

        .info {
            padding: 20px;
            display: flex;
        }

        .info .left {
            font-weight: bold;
            font-size: 16px;
            padding: 4px;
            width: 100%;
        }

        .info .right {
            width: 120px;
            height: 120px;
        }

        .right img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info .left p {
            padding-bottom: 5px;
        }

        .info .leftbelow {
            font-weight: bold;
            font-size: 16px;
            border: 1px solid black;
            padding: 4px;
            width: 300px;
        }

        .info .leftbelow .heading {
            width: 100%;
            height: 22px;
            background-color: rgb(142, 142, 142);
        }

        .info .leftbelow p {
            padding-bottom: 5px;
        }

        .table {
            border-spacing: 0px;
            border: 1px solid black;
            width: 100%;
        }

        .table th {
            padding: 10px;
            /* border: 1px solid black; */
            background-color: rgb(142, 142, 142);
            font-weight: bold;
        }

        .sundayrow {
            background-color: rgb(188, 186, 186);
        }

        .lastrow {
            background-color: rgb(231, 231, 231);
            font-weight: bold;
        }

        .table td {
            padding: 5px;
            padding-right: 10px;
            /* border: 1px solid black; */
        }
    </style>
</head>

<body>
    <div class="page">
        <center>
            <h2>Monthly Attendance Card</h2>
        </center>
        <div class="info">
            <div class="left">
                <p>Date: {{ now() }}</p>
                <p>Name: {{ $student->StudentName }}</p>
                <p>Father Name: {{ $student->FatherName }}</p>
                <p>Month: {{ $month }}/{{ $year }} - Report</p>
            </div>
            <div class="right">
                <img src="{{ asset('images/' . $student->Image) }}" alt="">
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
                    <th>Status/Sunday</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $presentCount = 0;
                    $absentCount = 0;
                    $monthStartDate = \Carbon\Carbon::createFromDate($year, $month, 1);
                    $monthEndDate = \Carbon\Carbon::createFromDate($year, $month, $monthStartDate->daysInMonth);
                    $currentDate = $monthStartDate;
                @endphp

                @while ($currentDate <= $monthEndDate)
                    @php
                        $isSunday = date('w', strtotime($currentDate->format('Y-m-d'))) == 0;
                        $record = $studentMonthlyReport->where('date', $currentDate->format('Y-m-d'))->first();
                    @endphp

                    <tr class="{{ $isSunday ? 'sundayrow' : '' }}">
                        <td>{{ $currentDate->format('Y-m-d') }}</td>
                        <td>{{ $student->StudentName }}</td>
                        <td>{{ $student->FatherName }}</td>
                        <td>{{ $student->ClassName }}</td>
                        <td>{{ $student->SectionName }}</td>
                        <td>
                            @if ($record)
                                {{ $record->status }}
                                @if ($record->status === 'P')
                                    @php
                                        $presentCount++;
                                    @endphp
                                @elseif($record->status === 'A')
                                    @php
                                        $absentCount++;
                                    @endphp
                                @endif
                            @endif
                        </td>
                        <td>
                            @if ($isSunday)
                                Sunday
                            @endif
                            @if ($record)
                                @if ($record->status === 'P')
                                    Present
                                @elseif($record->status === 'A')
                                    Absent
                                @endif
                            @endif
                        </td>
                    </tr>
                    @php
                        $currentDate->addDay();
                    @endphp
                @endwhile
                <tr class="lastrow">
                    <td>Total Classes</td>
                    <td>{{ $studentMonthlyReport->count() }}</td>
                    <td>Present Classes</td>
                    <td>{{ $presentCount }}</td>
                    <td>Absent Classes</td>
                    <td>{{ $absentCount }}</td>
                    <td>Percentage:
                        {{ $presentCount == 0 ? 0 : intval(($presentCount / $studentMonthlyReport->count()) * 100) }}%
                    </td>
                </tr>
            </tbody>
            {{-- <tbody>
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
                <td>Percentage: {{ $presentCount == 0 ? 0 : $presentCount/$studentMonthlyReport->count() * 100 }}%</td>
            </tr>
        </tbody> --}}
        </table>
        <div class="info">
            <div class="leftbelow">
                <div class="heading">
                    <center>Report Summary</center>
                </div>
                <p>Total Classes: {{ $studentMonthlyReport->count() }}</p>
                <p>Total Present Classes: {{ $presentCount }}</p>
                <p>Total Absent Classes: {{ $absentCount }}</p>
                <p>Leave Days: {{ $totalLeaveDays }}</p>
                @if ($presentCount != 0)
                    @php
                        $percentage = intval(($presentCount / $studentMonthlyReport->count()) * 100) . '%';
                    @endphp
                    <p>Percentage of Classes: {{ $percentage }}</p>
                @else
                    <p>Percentage of Classes: 0%</p>
                @endif
            </div>
            <div class="right">

            </div>
        </div>
    </div>
</body>

</html>
