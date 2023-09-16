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

    .check1 .first input {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check1 button {
        margin-top: 30px;
        height: 40px;
    }
</style>

@section('contents')
    <div class="col-md-12">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Attendance List</h6>

                <div class="card-tools">
                    <div class="title_right">
                    </div>


                </div>

            </div>

            <form action="{{ route('UpdateAttendance') }}" method="POST">
                @csrf
                <div class="check1">
                    <input type="hidden" name="Date" value="{{$date}}">
                    <button class="btn btn-primary" type="submit"> Submit Attendance</button>
                </div>
                <div class="col-md-12 text-right btn">

                </div>
        </div>




        <div class="card-body">
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>{{ __('Users.#') }}</th>
                        <th>{{ __('Student.Registration No') }}</th>
                        <th>{{ __('Student.Student Name') }}</th>
                        <th>{{ __('Student.Father Name') }}</th>
                        <th>Date</th>
                        <th>Present/Absent</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->StudentID }}</td>
                            <td>{{ $student->RegistrationNo }}</td>
                            <td>{{ $student->StudentName }}</td>
                            <td>{{ $student->FatherName }}</td>
                            <td>{{ $date }}</td>
                            <td>
                                <input class="AttendanceCheckbox" type="checkbox" name="Status[{{ $student->StudentID }}]" value="P" {{ $attendance->where('StudentID', $student->StudentID)->first()->Status === 'P' ? 'checked' : '' }}> Present
                                <input class="AttendanceCheckbox" type="checkbox" name="Status[{{ $student->StudentID }}]" value="A" {{ $attendance->where('StudentID', $student->StudentID)->first()->Status === 'A' ? 'checked' : '' }}> Absent
                            </td>
                            <td class="Status">
                                <label for="">{{ $attendance->where('StudentID', $student->StudentID)->first()->Status === 'P' ? 'Present' : 'Absent' }}</label>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </form>
    </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
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

        $('.AttendanceCheckbox').click(function() {
            var checkboxes = $(this).closest('td').find('.AttendanceCheckbox');

            checkboxes.prop('checked', false);
            $(this).prop('checked', true);

            var row = $(this).closest('tr');
            var Status = row.find('.Status');

            var isPresentChecked = row.find('.AttendanceCheckbox[value="P"]').is(':checked');

            if (isPresentChecked) {
                Status.text('Present');
            } else {
                Status.text('Absent');
            }
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
