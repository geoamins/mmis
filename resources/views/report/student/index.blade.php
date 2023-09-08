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
                <h6 class="card-title">Student Dashboard</h6>

                <div class="tile_count">
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
                        <div class="count">{{ $students->count() }}</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Total Departments</span>
                        <div class="count">{{ $departments->count() }}</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Classes</span>
                        <div class="count green">{{ $classes->count() }}</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Sections</span>
                        <div class="count">{{ $sections->count() }}</div>
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

            <form action="{{ route('StudentReport') }}" method="GET">
                <div class="check1">
                    <div class="first">
                        <p>Country Name</p>
                        <select id="country-dd" name="CountryID">
                            <option value="">Select Country Name</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->CountryID }}">{{ $country->CountryName }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="fourth">
                        <p>Province Name</p>
                        <select id="province-dd" name="ProvinceID">
                            <option value="">Select Province</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->ProvinceID }}">{{ $province->ProvinceName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="second">
                        <p>District Name</p>
                        <select id="district-dd" name="DistrictID">
                            <option value="">Select District Name</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->DistrictID }}">{{ $district->DistrictName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="third">
                        <p>Department Name</p>
                        <select id="DepartmentName" name="DeptID">
                            <option value="">Select Department Name</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->DeptID }}">{{ $department->DepartmentName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="check">
                    <div class="fourth">
                        <p>Session Name</p>
                        <select id="SessionTitle" name="SessionID">
                            <option value="">Select Session</option>
                            @foreach ($sessions as $session)
                                <option value="{{ $session->SessionID }}">{{ $session->SessionTitle }}</option>
                            @endforeach
                        </select>
                    </div>
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
                            @foreach ($sections as $section)
                                <option value="{{ $section->SectionID }}">{{ $section->SectionName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="btn">
                        <button class="btn btn-primary" type="submit">Search</button>
                        <button onclick="printDiv('myTable')" class="btn btn-primary">Export</button>
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
                            <th>Country</th>
                            <th>Province</th>
                            <th>District</th>
                            <th>Department</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Session</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $student)
                            <tr>
                                <td>{{ $student->StudentID }}</td>
                                <td>{{ $student->RegistrationNo }}</td>
                                <td>{{ $student->StudentName }}</td>
                                <td>{{ $student->FatherName }}</td>
                                <td>{{ $student->CountryName }}</td>
                                <td>{{ $student->ProvinceName }}</td>
                                <td>{{ $student->DistrictName }}</td>
                                <td>{{ $student->DepartmentName }}</td>
                                <td>{{ $student->ClassName }}</td>
                                <td>{{ $student->SectionName }}</td>
                                <td>{{ $student->SessionTitle }}</td>
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

    $(document).ready(function() {
        $('#country-dd').on('change', function() {
            var CountryID = this.value;
            $("#province-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-states') }}",
                type: "post",
                data: {
                    CountryID: CountryID,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#province-dd').html('<option value="">Select State</option>');
                    $.each(result.states, function(key, value) {
                        $("#province-dd").append('<option value="' + value
                            .ProvinceID + '">' + value.ProvinceName +
                            '</option>');
                    });
                }
            });
        });
        $('#province-dd').on('change', function() {
            var ProvinceID = this.value;
            $("#district-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-cities') }}",
                type: "post",
                data: {
                    ProvinceID: ProvinceID,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#district-dd').html('<option value="">Select District</option>');
                    $.each(result.cities, function(key, value) {
                        $("#district-dd").append('<option value="' + value
                            .DistrictID + '">' + value.DistrictName +
                            '</option>');
                    });
                }
            });
        });
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
    });
</script>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
