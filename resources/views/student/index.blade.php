@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Student List</h6>

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
                                <input type="text" name="search" class="form-control" placeholder="Search by name">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" name="searchbyrollno" class="form-control" placeholder="Search by Roll No">
                                <div class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-primary" href="{{ route('student.create') }}">New Student</a>
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
                        <th>Registration No</th>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th>Guardian Name</th>
                        <th>Admission Date</th>
                        <th>CNIC</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $student)
                        <tr>
                            <td>{{ $student->StudentID }}</td>
                            <td>{{ $student->RegistrationNo }}</td>
                            <td>{{ $student->StudentName }}</td>
                            <td>{{ $student->FatherName }}</td>
                            <td>{{ $student->GuardianName }}</td>
                            <td>{{ $student->AdmissionDate }}</td>
                            <td>{{ $student->SCNIC }}</td>
                            <td>
                                @can('student-list')
                                 <a class="btn btn-success" href="{{ route('student.show',$student->StudentID) }}">Show</a>
                                 @endcan
                                @can('student-edit')
                                    <a class="btn btn-primary" href="{{ route('student.edit', $student->StudentID) }}">Edit</a>
                                @endcan
                                @can('student-delete')

                                    {!! Form::open(['method' => 'DELETE','route' => ['student.destroy', $student->StudentID],'style'=>'display:inline']) !!}

                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>Delete</button>
                                    {!! Form::close() !!}

                                    {{--  <form action="{{ url('/basic', $data->CountryID) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>  --}}
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
