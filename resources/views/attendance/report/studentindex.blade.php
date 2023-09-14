@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist',
])

<style>
    .check {
        display: flex;
        width: 100%;
        margin-left: 20px;
        margin-top: 20px;
    }

    .check div {
        width: 30%;
        margin-right: 20px;
    }

    .check .first select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check .second select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check .third select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check .fourth select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check button {
        margin-top: 25px;
        height: 40px;
    }

    .check1 {
        display: flex;
        width: 96%;
        margin-left: 20px;
        margin-top: 20px;
    }

    .check1 div {
        width: 30%;
        margin-right: 20px;
    }

    .check1 .first select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check1 .second select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check1 .third select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check1 .fourth select {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }
</style>

@section('contents')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Attendance Report Dashboard</h6>

                <div class="card-tools">
                    <div class="title_right">
                        {{-- <form action="{{ route('basic.index') }}" method="GET">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">

                                    <input type="text" name="search" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary"  type="submit">Go!</button>
                                    </span>

                            </div>
                        </div>
                    </form> --}}
                    </div>


                </div>

            </div>

            <form action="{{ route('StudentAttReportIndex') }}" method="GET">
                <div class="check">

                    <div class="first">
                        <p>Class Name</p>
                        <select id="class-dd" name="ClassID">
                            <option value="">Select Class Name</option>
                            @foreach ($classes as $class)
                                <option value="{{ $class->ClassID }}">{{ $class->ClassName }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="second">
                        <p>Section Name</p>
                        <select id="section-dd" name="SectionID">
                            <option value="">Select Section Name</option>
                            {{-- @foreach ($sections as $section)
                                <option value="{{ $section->SectionID }}">{{ $section->SectionName }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="btn">
                        <button class="btn btn-primary" type="submit">Search</button>
                        <button onclick="printDiv('myTable')" class="btn btn-primary">Export</button>
                    </div>
                </div>




                <div class="card-body">
                    {{-- {{ $data->render() }} --}}
                    <table id="myTable" class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>{{ __('Users.#') }}</th>
                                <th>{{ __('Student.Registration No') }}</th>
                                <th>{{ __('Student.Student Name') }}</th>
                                <th>{{ __('Student.Father Name') }}</th>
                                <th>Department</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Session</th>
                                <th>Monthly Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $key => $student)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $student->RegistrationNo }}</td>
                                    <td>{{ $student->StudentName }}</td>
                                    <td>{{ $student->FatherName }}</td>
                                    <td>{{ $student->DepartmentName }}</td>
                                    <td>{{ $student->ClassName }}</td>
                                    <td>{{ $student->SectionName }}</td>
                                    <td>{{ $student->SessionTitle }}</td>
                                    <td>
                                        <a id="Reportbtn" class="btn btn-success"
                                            href="{{ route('StudentReport', $student->StudentID) }}">{{ 'Report' }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $data->render() }} --}}
                </div>
        </div>
        </form>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).outerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

    }

    $(document).ready(function() {
        $('#class-dd').on('change', function() {
            var ClassID = this.value;
            $("#section-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-sections') }}",
                type: "post",
                data: {
                    ClassID: ClassID,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#section-dd').html('<option value="">Select Section</option>');
                    $.each(result.sections, function(key, value) {
                        $("#section-dd").append('<option value="' + value
                            .SectionID + '">' + value.SectionName + '</option>');
                    });
                }
            });
        });

        // Add an event listener to the action button
        const actionButtons = document.querySelectorAll('#Reportbtn');


        actionButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Submit the form associated with this button
                this.closest('tr').querySelector('form').submit();
            });
        });

    });
</script>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
