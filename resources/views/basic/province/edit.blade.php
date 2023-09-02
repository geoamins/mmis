@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')
<section class="content-header">

</section>
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
            <div class="card-header">{{ __('Basic.Edit Province') }}
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('province.index') }}">{{ __('Users.Back') }}</a>
                </span>
            </div>


                <form action="{{route('province.update',$data->ProvinceID)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('put')}}

                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">{{ __('Basic.Province Name') }}
                        <span class="required"></span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{ $data->ProvinceName }}" name="ProvinceName" placeholder="{{ __('Basic.Please Enter your Province name here!') }}" class="form-control ">

                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <button type="submit" class="btn btn-primary">{{ __('Users.Submit') }}</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
@endsection
