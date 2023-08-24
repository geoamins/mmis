@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Student Type List</h6>

            <div class="card-tools">
                <div class="title_right">
                    <form action="{{ route('studenttype.index') }}" method="GET">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">

                                    <input type="text" name="search" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary"  type="submit">Search!</button>
                                    </span>

                            </div>
                        </div>
                    </form>
                </div>

                @can('student-type-create')
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="{{ route('studenttype.create') }}">Add Student Type</a>
                    </span>
                @endcan
            </div>
        </div>
        <div class="card-body">
            {{ $data->render() }}
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Student Type</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $studenttype)
                        <tr>
                            <td>{{ $studenttype->StudentTypeID }}</td>
                            <td>{{ $studenttype->StudentType }}</td>
                            <td>
                                {{--  <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>  --}}
                                @can('student-type-edit')
                                    <a class="btn btn-primary" href="{{ route('studenttype.edit', $studenttype->StudentTypeID) }}">Edit</a>
                                @endcan
                                @can('student-type-delete')

                                    {!! Form::open(['method' => 'DELETE','route' => ['studenttype.destroy', $studenttype->StudentTypeID],'style'=>'display:inline']) !!}

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
