@extends('admin.adminmain', [
    'menu' => 'report',
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

    .check .second input {
        width: 100%;
        height: 35px;
        border: none;
        background-color: rgb(232, 231, 231);
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 4px;
        margin-right: 4px;
    }

    .check .third input {
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
</style>

@section('contents')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Admission Report Dashboard</h6>

                <div class="tile_count">
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Addmitted Students</span>
                        <div class="count">{{ $admitted }}</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Total Struck Off Students</span>
                        <div class="count">{{ $doslcstudents }}</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
                        <div class="count green">{{ $totalstudents }}</div>
                    </div>
                </div>

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

            <form action="{{ route('StudentAdmissionReport') }}" method="GET">
                <div class="check">
                    <div class="first">
                        <p>Select Option</p>
                        <select id="option-dd" name="OptionID">
                            <option value="">Select Option</option>
                            <option value="1">Admitted</option>
                            <option value="2">Struck Off</option>
                        </select>
                    </div>
                    <div class="second">
                        <p>Registration No</p>
                        <input type="text" name="RegistrationNo">
                    </div>
                    <div class="third">
                        <p>Student Name</p>
                        <input type="text" name="StudentName">
                    </div>
                    <div class="btn">
                        <button class="btn btn-primary" type="submit">Search</button>
                        <button onclick="printDiv('myTable')" class="btn btn-primary">Print</button>
                    </div>
                </div>

            </form>


            <div class="card-body">
                {{-- {{ $data->render() }} --}}
                <table id="myTable" class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>{{ __('Users.#') }}</th>
                            <th>{{ __('Student.Registration No') }}</th>
                            <th>{{ __('Student.Student Name') }}</th>
                            <th>{{ __('Student.Father Name') }}</th>
                            <th>DOB</th>
                            <th>DOSLC Date</th>
                            <th>Department</th>
                            <th>Session</th>
                            <th>Class</th>
                            <th>Certificates Generater</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($data as $key => $student)
                            <tr style="height: 75px">
                                <td>{{ $i++ }}</td>
                                <td>{{ $student->RegistrationNo }}</td>
                                <td>{{ $student->StudentName }}</td>
                                <td>{{ $student->FatherName }}</td>
                                <td>{{ $student->DOB }}</td>
                                <td>{{ $student->DOSLC }}</td>
                                <td>{{ $student->DepartmentName }}</td>
                                <td>{{ $student->SessionTitle }}</td>
                                <td>{{ $student->ClassName }}</td>
                                <td>
                                    @empty(!$student->DOSLC)
                                        @can('student-list')
                                        <a class="btn btn-success"
                                            href="{{route('StudentLeaveCertificate', $student->StudentID)}}">{{'Leave'}}</a>
                                    @endcan
                                    @can('student-edit')
                                        <a class="btn btn-primary"
                                            href="">{{'Character'}}</a>
                                    @endcan
                                    @endempty


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $data->render() }} --}}
            </div>
        </div>
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

</script>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
