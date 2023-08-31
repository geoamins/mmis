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
                            <div class="card-header">{{ __('Basic.Create Country') }}
                                <span class="float-right">
                                    <a class="btn btn-primary" href="{{ route('country.index') }}">{{ __('Users.Back') }}</a>
                                </span>
                            </div>
                            <div class="card-body">
                                {!! Form::open(array('route' => 'country.store','method'=>'POST')) !!}
                                    <div class="form-group">
                                        <strong>{{ __('Basic.Country Name') }}</strong>
                                        {!! Form::text('CountryName', null, [
                                            'placeholder' => __('Basic.Please Enter your Country name here!'),
                                            'class' => 'form-control'
                                        ]) !!}
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('Users.Submit') }}</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
