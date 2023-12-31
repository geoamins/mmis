@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">{{ __('Users.Roles') }}</h6>
            <div class="card-tools">
                @can('role-create')
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="{{ route('roles.create') }}">{{ __('Users.New Role') }}</a>
                    </span>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>{{ __('Users.#') }}</th>
                        <th>{{ __('Users.Name') }}</th>
                        <th width="280px">{{ __('Users.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">{{ __('Users.Show') }}</a>
                                @can('role-edit')
                                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">{{ __('Users.Edit') }}</a>
                                @endcan
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                    {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}

                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>{{ __('Users.Delete') }}</button>
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
