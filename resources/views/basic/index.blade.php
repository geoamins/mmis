@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Country List</h6>
            <div class="card-tools">
                @can('role-create')
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="{{ route('basic.create') }}">Add Country</a>
                    </span>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Country Name</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $basic)
                        <tr>
                            <td>{{ $basic->CountryID }}</td>
                            <td>{{ $basic->CountryName }}</td>
                            <td>
                                {{--  <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>  --}}
                                @can('country-edit')
                                    <a class="btn btn-primary" href="{{ route('basic.edit', $basic->CountryID) }}">Edit</a>
                                @endcan
                                @can('country-delete')

                                    {!! Form::open(['method' => 'DELETE','route' => ['basic.destroy', $basic->CountryID],'style'=>'display:inline']) !!}

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
