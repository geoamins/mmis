@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'userlist'
])
@section('contents')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">{{ __('users.User') }}
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}">{{ __('users.Back') }}</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>{{ __('users.Name') }}:</strong>
                    {{ $user->name }}
                </div>
                <div class="lead">
                    <strong>{{ __('users.Email') }}:</strong>
                    {{ $user->email }}
                </div>
                <div class="lead">
                    <strong>{{ __('users.Password') }}:</strong>
                    ********
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
