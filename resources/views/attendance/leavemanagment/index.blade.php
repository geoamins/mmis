@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">{{ __('Student.Student List') }}</h6>

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

                @can('student-create')
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('student.index') }}" method="GET" class="form-inline">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Student Name">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">{{ __('Users.Search') }}</button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" name="searchbyrollno" class="form-control" placeholder="Student Roll No">
                                <div class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">{{ __('Users.Search') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-primary" href="{{ route('LeaveCreate') }}">Add Leave</a>
                    </div>
                </div>

                {{-- <form action="{{ route('student.index') }}" method="GET">
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search By Name">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </div>
                </form>

                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="{{ route('student.create') }}">Add Student</a>
                    </span> --}}
                @endcan
            </div>
        </div>
        <div class="card-body">
            {{ $data->render() }}
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th width="">{{ __('Users.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $leave)
                        <tr>
                            <td>{{ $leave->LeaveID }}</td>
                            <td>{{ $leave->StudentID }}</td>
                            <td>{{ $leave->StudentName }}</td>
                            <td>{{ $leave->ClassName }}</td>
                            <td>{{ $leave->SectionName }}</td>
                            <td>{{ $leave->FromDate }}</td>
                            <td>{{ $leave->ToDate }}</td>
                            <td>{{ $leave->Reason }}</td>
                            <td>
                                @if ($leave->Status == 'Approved')
                                <span class="badge badge-success">{{ $leave->Status }}</span>
                                @endif
                                @if ($leave->Status == 'Not Approved')
                                <span class="badge badge-danger">{{ $leave->Status }}</span>
                                @endif
                                @if ($leave->Status == 'Pending')
                                <span class="badge badge-warning">{{ $leave->Status }}</span>
                                @endif
                            </td>
                            <td>
                                {{-- @can('student-list')
                                 <a class="btn btn-success" href="{{ route('student.show',$student->StudentID) }}">{{ __('Users.Show') }}</a>
                                 @endcan --}}
                                @can('student-edit')
                                    <a class="btn btn-primary" href="{{ route('leave.edit', $leave->LeaveID) }}">Edit</a>
                                @endcan
                                @can('student-delete')

                                    {!! Form::open(['method' => 'DELETE','route' => ['leave.destroy', $leave->LeaveID],'style'=>'display:inline']) !!}

                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>Delete</button>
                                    {!! Form::close() !!}

                              @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->render() }}
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection
