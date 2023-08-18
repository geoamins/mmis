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
                            <div class="card-header">Create Province
                                {{--  <span class="float-right">
                                    <a class="btn btn-primary" href="{{ route('roles.index') }}">Province</a>
                                </span>  --}}
                            </div>
                            <div class="card-body">
                                {!! Form::open(array('route' => 'province.store','method'=>'POST')) !!}
                                    <div class="form-group">
                                        <strong>Province Name:</strong>
                                        {!! Form::text('ProvinceName', null, array('placeholder' => 'Please enter the province name','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">


											<label class="control-label col-md-3 col-sm-3 ">Select Country</label>
                                            <select name="CountryID" class="form-control">
                                                <option>Choose option</option>
                                                @foreach ($countries as $country)

                                                        <option value="{{ $country->CountryID }}">{{ $country->CountryName }}</option>

                                                @endforeach
                                            </select>


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
