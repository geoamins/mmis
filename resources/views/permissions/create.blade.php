@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'permissionlist'
])
@section('contents')

<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">{{ __('Users.Create Permission') }}</h6>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('permissions.index') }}">{{ __('Users.Back') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
                        <div class="form-group">
                            <label for="name">{{ __('Users.Name') }}:</label>
                            {!! Form::text('name', null, array('id' => 'name', 'placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="friendly_title">{{ __('Users.Friendly Title') }}:</label>
                            {!! Form::text('friendly_title', null, array('id' => 'friendly_title', 'placeholder' => 'Friendly Title','class' => 'form-control')) !!}
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Users.Submit') }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
