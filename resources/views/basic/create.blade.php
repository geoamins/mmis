@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')
<section class="content-header">

</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
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
                            <div class="card-header">Create role
                                <span class="float-right">
                                    <a class="btn btn-primary" href="{{ route('roles.index') }}">Roles</a>
                                </span>
                            </div>
                            <div class="card-body">
                                {!! Form::open(array('route' => 'basic.store','method'=>'POST')) !!}
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        {!! Form::text('CountryName', null, array('placeholder' => 'Please enter the country Name','class' => 'form-control')) !!}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
