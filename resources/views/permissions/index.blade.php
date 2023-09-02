@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'permissionlist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">{{ __('Users.permissions') }}</h6>
            <div class="card-tools">
                @can('role-create')
                    <span style="float: right;">
                        <a class="btn btn-primary" href="{{ route('permissions.create') }}">{{ __('Users.New Permission') }}</a>
                    </span>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>{{ __('Users.#') }}</th>
                        <th>{{ __('Users.Name') }}</th>
                        <th>{{ __('Users.Friendly Title') }}</th>
                        <th width="280px">{{ __('Users.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->friendly_title }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('permissions.show',$permission->id) }}">{{ __('Users.Show') }}</a>
                                @can('role-edit')
                                    <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">{{ __('Users.Edit') }}</a>
                                @endcan
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline', 'class' => 'del-permissions']) !!}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-permissions" data-toggle="tooltip" title='Delete'>{{ __('Users.Delete') }}</button>
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->appends($_GET)->links() }}
        </div>
    </div>
</div>

@endsection
