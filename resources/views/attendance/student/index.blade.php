@extends('admin.adminmain', [
    'menu' => 'attendance',
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
    .check1 button {
        height: 40px;
        margin-top: 20px;
        align-items: center;
    }
</style>

@section('contents')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Attendance Dashboard</h6>

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

            <form action="{{ route('attendance.create') }}" method="GET">
                <div class="check1">
                    <div class="first">
                        <p>Select Class</p>
                        <select id="class-dd" name="ClassID">
                            <option value="">Select Class Name</option>
                            @foreach ($classes as $class)
                                <option value="{{ $class->ClassID }}">{{ $class->ClassName }}</option>
                            @endforeach
                            <span>
                                @error('ClassID')
                                <p class="text-danger">{{'Please Select Class Name'}}</p>
                                @enderror

                            </span>
                        </select>
                    </div>
                    <div class="second">
                        <p>Select Section</p>
                        <select id="section-dd" name="SectionID">
                            <option value="">Select Section Name</option>
                        </select>
                        <span>
                            @error('SectionID')
                            <p class="text-danger">{{'Please Select Class Name'}}</p>
                            @enderror

                        </span>
                    </div>
                    <div class="btn">
                        <button class="btn btn-primary" type="submit">Open Attendance Sheet</button>
                    </div>
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
    });
</script>
