@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')
{{-- <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary"> --}}
                <section class="content-header">

                </section>
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">{{ __('Users.Roles') }}
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('roles.index') }}">{{ __('Users.Back') }}</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>{{ __('Users.Name') }}:</strong>
                    {{ $role->name }}
                </div>
                <div class="lead">
                    <strong>{{ __('Users.permissions') }}:</strong>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $permission)
                            <label class="badge badge-success">{{ $permission->name }}</label>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
            {{-- </div>
        </div>
    </div> --}}

@endsection
