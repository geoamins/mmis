@extends('admin.adminmain', [
    'menu' => 'student',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
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
                                <input type="text" name="search" class="form-control" placeholder="{{ __('Student.Search by Student name!') }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">{{ __('Users.Search') }}</button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" name="searchbyrollno" class="form-control" placeholder="{{ __('Student.Search by Roll no!') }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">{{ __('Users.Search') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-primary" href="{{ route('student.create') }}">{{ __('Student.New Student') }}</a>
                        <a class="btn btn-primary" href="{{ route('StudentPDFReport') }}">{{ __('Student.Export Pdf') }}</a>
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
                            <th>{{ __('Users.#') }}</th>
                            <th>{{ __('Student.Registration No') }}</th>
                            <th>{{ __('Student.Student Name') }}</th>
                            <th>{{ __('Student.Father Name') }}</th>
                            <th>{{ __('Student.Guardian Name') }}</th>
                            <th>{{ __('Student.Admission Date') }}</th>
                            <th>{{ __('Student.CNIC') }}</th>
                            <th width="280px">{{ __('Users.Action') }}</th>
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
                                    <a class="btn btn-success" href="{{ route('student.show',$student->StudentID) }}">{{ __('Users.Show') }}</a>
                                    @endcan
                                    @can('student-edit')
                                        <a class="btn btn-primary" href="{{ route('student.edit', $student->StudentID) }}">{{ __('Users.Edit') }}</a>
                                    @endcan
                                    @can('student-delete')

                                        {!! Form::open(['method' => 'DELETE','route' => ['student.destroy', $student->StudentID],'style'=>'display:inline']) !!}

                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>{{ __('Users.Delete') }}</button>
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
