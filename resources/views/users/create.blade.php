@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'userlist'
])
@section('contents')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">{{ __('users.Create user') }}
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}">{{ __('users.Back') }}</a>
                </span>
            </div>

            <div class="card-body">
                {!! Form::open(array('route' => 'users.store','method'=>'POST' ,'enctype'=>'Multipart/form-data')) !!}
                    <div class="form-group">
                        <strong>{{ __('users.Name') }}:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>{{ __('users.Email') }}:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        <strong>{{ __('users.Password') }}:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>{{ __('users.Confirm Password') }}:</strong>
                        {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>{{ __('users.Image') }}:</strong>
                        {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>{{ __('users.Roles') }}:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('users.Submit') }}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
