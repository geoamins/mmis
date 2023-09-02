@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'permissionlist'
])
@section('contents')

<section class="content-header">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title">{{ __('Users.Edit permission') }}</h3>
                        <div class="card-tools" style="float: right;">
                            <a class="btn btn-primary" href="{{ route('permissions.index') }}">{{ __('Users.Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- Form goes here --}}
                        {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method'=>'PATCH']) !!}
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
    </div>


@endsection
